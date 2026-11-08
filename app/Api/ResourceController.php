<?php
namespace Incos\Api;
final class ResourceController {
    private $db; private $auth; private $definitions;
    public function __construct(\PDO $db, AuthController $auth,array $definitions){$this->db=$db;$this->auth=$auth;$this->definitions=$definitions;}
    public function handle(string $name,?int $id,string $method): void {
        if(!isset($this->definitions[$name]))throw new ApiError(404,'Recurso no encontrado.');
        $d=$this->definitions[$name];$repo=new ResourceRepository($this->db,$d);$u=$this->auth->current(false);$staff=$u&&AuthController::staff($u);$reading=$method==='GET';
        if(!$reading&&!in_array($method,['POST','PUT','PATCH','DELETE'],true))throw new ApiError(405,'Método no permitido.');
        if(!$u && (!$reading||!$d['public']))throw new ApiError(401,'Debes iniciar sesión.');
        $scope=[];
        if($u&&!$staff&&!$d['public']) {
            if($name==='proyectos')$scope=['estudiantes_id'=>$u['estudiantes_id']];
            elseif($name==='archivos')$scope=['estudiante'=>$u['nombre']];
            elseif($name==='estudiantes')$scope=['id'=>$u['estudiantes_id']];
            elseif($name==='usuarios')$scope=['id'=>$u['id']];
            else throw new ApiError(403,'Acceso no permitido.');
        }
        if($reading) {
            if($id!==null){$row=$repo->one($id);foreach($scope as $key=>$value)if($value===null||(string)$row[$key]!== (string)$value)throw new ApiError(404,'Registro no encontrado.');
                if(!$staff&&in_array($name,['repositorio','repositorio-2022'],true)&&!(int)$row['estado'])throw new ApiError(404,'Registro no encontrado.');Http::json(['data'=>$row]);
            } else Http::json($repo->listing($_GET,!$staff&&in_array($name,['repositorio','repositorio-2022'],true),$scope));return;
        }
        $this->auth->csrf();
        if($d['readonly'])throw new ApiError(405,'Este recurso es de solo lectura.');
        if(!$staff && !($name==='proyectos'&&$method==='POST'&&$id===null))throw new ApiError(403,'Operación reservada al personal administrativo.');
        if($name==='archivos')throw new ApiError(405,'Usa el servicio de carga de archivos.');
        if($method==='DELETE') {if($id===null)throw new ApiError(405,'Indica el registro que deseas eliminar.');$repo->delete($id);Http::json(['data'=>null,'message'=>'Registro eliminado.']);return;}
        if(($method==='POST')!==($id===null))throw new ApiError(405,'Método no permitido para esta ruta.');
        $data=Http::body();
        if($name==='proyectos'&&!$staff){$data['estudiantes_id']=(int)$u['estudiantes_id'];$data['estado']=1;$stage=$this->db->query("SELECT id FROM etapas_instancia WHERE instancia='Predefensa' LIMIT 1")->fetchColumn();if(!$stage)throw new ApiError(409,'No está configurada la etapa Predefensa.');$data['etapas_instancia_id']=(int)$stage;}
        if($name==='proyectos'&&isset($data['archivosinsta_id'])) {
            $s=$this->db->prepare('SELECT estudiante FROM archivosinsta WHERE id=?');$s->execute([$data['archivosinsta_id']]);$owner=$s->fetchColumn();
            if($owner===false||(!$staff&&$owner!==$u['nombre']))throw new ApiError(403,'El documento no pertenece al usuario.');
        }
        if($method==='POST'&&isset($d['fields']['estado'])&&!isset($data['estado']))$data['estado']=1;
        $data=$repo->validate($data,$method==='POST'||$method==='PUT');
        if($name==='usuarios'&&isset($data['contraseña']))$data['contraseña']=password_hash($data['contraseña'],PASSWORD_BCRYPT);
        if($method==='POST'){$id=$repo->insert($data);header('Location: '.rtrim(dirname($_SERVER['SCRIPT_NAME']),'/').'/v1/'.$name.'/'.$id);Http::json(['data'=>$repo->one($id)],201);}
        else {
            if($name==='estudiantes'&&array_key_exists('estado',$data)) {
                $this->db->beginTransaction();
                try {$updated=$repo->update($id,$data);$s=$this->db->prepare('UPDATE usuario SET estado=? WHERE estudiantes_id=?');$s->execute([$data['estado'],$id]);$this->db->commit();}
                catch(\Throwable $e){if($this->db->inTransaction())$this->db->rollBack();throw $e;}
            } else $updated=$repo->update($id,$data);
            Http::json(['data'=>$updated]);
        }
    }
}
