<?php
namespace Incos\Api;
final class FileController {
    private $db;private $auth;private $definitions;
    public function __construct(\PDO $db,AuthController $auth,array $definitions){$this->db=$db;$this->auth=$auth;$this->definitions=$definitions;}
    private function files(): array {
        $input=$_FILES['pdf']??null;if(!$input)throw new ApiError(422,'Selecciona al menos un PDF.');
        $files=[];foreach((array)$input['name'] as $i=>$name) {
            $f=[];foreach(['name','tmp_name','size','error'] as $key)$f[$key]=is_array($input[$key])?$input[$key][$i]:$input[$key];
            if($f['error']!==UPLOAD_ERR_OK)throw new ApiError(422,'No se pudo recibir el archivo.');
            if($f['size']<5||$f['size']>20*1024*1024)throw new ApiError(422,'Cada PDF debe ocupar entre 5 bytes y 20 MB.');
            if(strtolower(pathinfo($name,PATHINFO_EXTENSION))!=='pdf'||!is_uploaded_file($f['tmp_name']))throw new ApiError(422,'Archivo no válido.');
            $h=fopen($f['tmp_name'],'rb');$magic=fread($h,5);fclose($h);
            if($magic!=='%PDF-'||(new \finfo(FILEINFO_MIME_TYPE))->file($f['tmp_name'])!=='application/pdf')throw new ApiError(422,'El contenido no es un PDF.');
            $files[]=$f;
        }
        if(count($files)>10)throw new ApiError(422,'Máximo 10 documentos por solicitud.');return $files;
    }
    public function upload(bool $legacy=false): void {
        $u=$this->auth->current();$this->auth->csrf();if($legacy)$this->auth->requireStaff();
        $files=$this->files();$created=[];$destinations=[];$resource=$legacy?'repositorio-2022':'archivos';$repo=new ResourceRepository($this->db,$this->definitions[$resource]);$folder=$legacy?'storage_Proyectos2022':'storage_Archivos';
        if(!is_dir(MVC_ROOT.'/'.$folder)&&!mkdir(MVC_ROOT.'/'.$folder,0755,true))throw new ApiError(500,'No se pudo preparar el directorio de documentos.');
        $this->db->beginTransaction();
        try {
            foreach($files as $i=>$f) {
                if($legacy) {
                    $body=$_POST;unset($body['pdf'],$body['id']);
                    $t=$this->db->prepare('SELECT nombre_lice FROM licenciados WHERE id=?');$t->execute([$body['licenciados_id']??0]);$body['tutor']=$t->fetchColumn()?:'';unset($body['licenciados_id']);$body['estado']=1;
                    if(isset($body['fecha_publicacion']))$body['fecha_publicacion']=self::date($body['fecha_publicacion']);
                    $data=$repo->validate($body,true);$data['ruta']='';$data['tipo_documento']=basename($f['name']);
                } else {
                    $titles=(array)($_POST['titulo']??[]);$title=trim((string)($titles[$i]??pathinfo($f['name'],PATHINFO_FILENAME)));
                    if($title===''||strlen($title)>255)throw new ApiError(422,'Título de documento inválido.');
                    $data=['titulo'=>$title,'ruta'=>'../storage_Archivos/','tipo_documento'=>basename($f['name']),'estudiante'=>$u['nombre']];
                }
                for($attempt=0;$attempt<1000;$attempt++){
                    $id=$repo->insert($data);$dest=MVC_ROOT.'/'.$folder.'/'.$id.'.pdf';
                    if(!file_exists($dest))break;
                    // El RAR puede contener PDF huérfanos con identificadores anteriores.
                    $repo->delete($id);
                }
                if(file_exists($dest)||!move_uploaded_file($f['tmp_name'],$dest))throw new ApiError(500,'No se pudo guardar el PDF.');
                $destinations[]=$dest;$created[]=$repo->one($id);
            }
            $this->db->commit();Http::json(['data'=>$created],201);
        } catch(\Throwable $e) {if($this->db->inTransaction())$this->db->rollBack();foreach($destinations as $dest)@unlink($dest);throw $e;}
    }
    public static function date(string $value): string {
        foreach(['!Y-m-d','!d-m-Y'] as $format){$d=\DateTimeImmutable::createFromFormat($format,$value);if($d&&$d->format(substr($format,1))===$value)return $d->format('Y-m-d');}throw new ApiError(422,'Fecha inválida.');
    }
    public function download(string $resource,int $id): void {
        $repo=new ResourceRepository($this->db,$this->definitions[$resource]);$row=$repo->one($id);$u=$this->auth->current(false);$staff=$u&&AuthController::staff($u);
        if($resource==='archivos') {if(!$u)throw new ApiError(401,'Debes iniciar sesión.');if(!$staff&&$row['estudiante']!==$u['nombre'])throw new ApiError(403,'Documento no permitido.');$file=MVC_ROOT.'/storage_Archivos/'.$id.'.pdf';}
        elseif($resource==='repositorio-2022'){if(!$staff&&!(int)$row['estado'])throw new ApiError(404,'Documento no encontrado.');$file=MVC_ROOT.'/storage_Proyectos2022/'.$id.'.pdf';}
        else {if(!$staff&&!(int)$row['estado'])throw new ApiError(404,'Documento no encontrado.');$base=realpath(MVC_ROOT.'/repositorio2023');$file=realpath(MVC_ROOT.'/repositorio2023/'.basename($row['ruta']));if(!$base||!$file||strpos($file,$base.DIRECTORY_SEPARATOR)!==0)throw new ApiError(404,'Documento no encontrado.');}
        if(!is_file($file))throw new ApiError(404,'PDF no encontrado.');header('Content-Type: application/pdf');header('Content-Disposition: inline; filename="documento-'.$id.'.pdf"');header('X-Content-Type-Options: nosniff');readfile($file);
    }
}
