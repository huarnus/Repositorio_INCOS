<?php
namespace Incos\Api;
final class PublicationController {
    private $db;private $auth;private $definitions;
    public function __construct(\PDO $db,AuthController $auth,array $definitions){$this->db=$db;$this->auth=$auth;$this->definitions=$definitions;}
    public function publish(int $id): void {
        $this->auth->requireStaff();$this->auth->csrf();$target=null;$this->db->beginTransaction();
        try {
            $s=$this->db->prepare('SELECT p.*,e.nombreCompleto,l.nombre_lice FROM proyectos_defensa p JOIN estudiantes e ON e.id=p.estudiantes_id JOIN licenciados l ON l.id=p.licenciados_id WHERE p.id_pro=? FOR UPDATE');$s->execute([$id]);$p=$s->fetch();if(!$p)throw new ApiError(404,'Proyecto no encontrado o ya publicado.');
            $source=MVC_ROOT.'/storage_Archivos/'.(int)$p['archivosinsta_id'].'.pdf';if(!is_file($source))throw new ApiError(409,'No existe el PDF asociado al proyecto.');
            $folder=MVC_ROOT.'/repositorio2023';if(!is_dir($folder)&&!mkdir($folder,0755,true))throw new ApiError(500,'No se pudo preparar el repositorio.');
            $filename='proyecto-'.$id.'-'.bin2hex(random_bytes(8)).'.pdf';$target=$folder.'/'.$filename;if(!copy($source,$target))throw new ApiError(500,'No se pudo copiar el PDF.');
            $repo=new ResourceRepository($this->db,$this->definitions['repositorio']);$rid=$repo->insert(['titulo'=>$p['titulo'],'descripcion'=>$p['descripcion'],'autor'=>$p['nombreCompleto'],'tutor'=>$p['nombre_lice'],'gestion'=>$p['gestion'],'fecha_publicacion'=>date('Y-m-d'),'estado'=>1,'ruta'=>'../repositorio2023/'.$filename,'tipo_documento'=>$filename,'modalidad_id'=>$p['modalidad_id'],'carrrera_id'=>$p['carrrera_id']]);
            // El trigger BEFORE DELETE original registra el historial una sola vez.
            $s=$this->db->prepare('DELETE FROM proyectos_defensa WHERE id_pro=?');$s->execute([$id]);
            // Se conserva el documento de origen y su registro para no romper otras referencias.
            $published=$repo->one($rid);$this->db->commit();$target=null;Http::json(['data'=>$published,'message'=>'Proyecto publicado. El documento de origen se conserva.'],201);
        } catch(\Throwable $e){if($this->db->inTransaction())$this->db->rollBack();if($target)@unlink($target);throw $e;}
    }
}
