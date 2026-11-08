<?php
namespace Incos\Api;
final class EnrollmentController {
    private $db;private $auth;private $definitions;
    public function __construct(\PDO $db,AuthController $auth,array $definitions){$this->db=$db;$this->auth=$auth;$this->definitions=$definitions;}
    public function create(array $data,bool $staff=false): void {
        if($staff){$this->auth->requireStaff();$this->auth->csrf();}
        else {
            $config=require MVC_ROOT.'/config/api.php';$captcha=$data['g-recaptcha-response']??'';
            if(!is_string($captcha)||$captcha===''||empty($config['recaptcha_secret']))throw new ApiError(422,'Completa reCAPTCHA.');
            $context=stream_context_create(['http'=>['method'=>'POST','header'=>"Content-Type: application/x-www-form-urlencoded\r\n",'content'=>http_build_query(['secret'=>$config['recaptcha_secret'],'response'=>$captcha]),'timeout'=>10]]);
            $result=json_decode((string)@file_get_contents('https://www.google.com/recaptcha/api/siteverify',false,$context),true);
            if(empty($result['success']))throw new ApiError(422,'No se pudo validar reCAPTCHA.');
        }
        foreach(['paterno','nombre','carnet','cargo_id'] as $key)if(!isset($data[$key])||!is_scalar($data[$key])||trim((string)$data[$key])==='')throw new ApiError(422,'Falta el campo '.$key.'.');
        if(!preg_match('/^[0-9]{6,10}$/D',(string)$data['carnet']))throw new ApiError(422,'El carnet debe tener de 6 a 10 dígitos.');
        $s=$this->db->prepare('SELECT nombre FROM cargo WHERE id=?');$s->execute([$data['cargo_id']]);$role=$s->fetchColumn();
        if(!$role||(!$staff&&!in_array($role,['Estudiante','Egresado'],true)))throw new ApiError(422,'Cargo no permitido para el registro.');
        $name=trim(implode(' ',array_filter([$data['paterno'],$data['materno']??'',$data['nombre']])));
        $table=$staff?'administrativos':'estudiantes';$repo=new ResourceRepository($this->db,$this->definitions[$table]);
        $person=['nombreCompleto'=>$name,'carnet'=>(string)$data['carnet'],'correo'=>$data['correo']??'','estado'=>1,'cargo_id'=>(int)$data['cargo_id']];
        if(!$staff)foreach(['extencion','celular','año_egreso'] as $key)$person[$key]=$data[$key]??'';
        $person=$repo->validate($person,true);$username=$data['usuario']??strtoupper(substr($data['paterno'],0,1).strtok($data['nombre'],' '));
        if(!is_string($username)||$username===''||strlen($username)>100)throw new ApiError(422,'Nombre de usuario inválido.');
        $this->db->beginTransaction();
        try {
            $s=$this->db->prepare('SELECT id FROM `'.$table.'` WHERE carnet=?');$s->execute([$person['carnet']]);if($s->fetch())throw new ApiError(409,'El carnet ya está registrado.');
            $s=$this->db->prepare('SELECT id FROM usuario WHERE usuario=?');$s->execute([$username]);if($s->fetch())throw new ApiError(409,'El nombre de usuario ya existe.');
            $id=$repo->insert($person);$users=new ResourceRepository($this->db,$this->definitions['usuarios']);$users->insert(['nombre'=>$name,'usuario'=>$username,'contraseña'=>password_hash((string)$data['carnet'],PASSWORD_BCRYPT),'estudiantes_id'=>$staff?null:$id,'cargo_id'=>(int)$data['cargo_id'],'estado'=>1]);
            $this->db->commit();Http::json(['data'=>['id'=>$id,'usuario'=>$username],'message'=>'Registro completado.'],201);
        }catch(\Throwable $e){if($this->db->inTransaction())$this->db->rollBack();throw $e;}
    }
}
