<?php
namespace Incos\Api;
final class AuthController {
    private $db;
    public function __construct(\PDO $db){$this->db=$db;}
    public function userBy(string $field,$value): ?array {
        $s=$this->db->prepare('SELECT u.*,c.nombre AS rol FROM usuario u JOIN cargo c ON c.id=u.cargo_id WHERE u.`'.$field.'`=?');$s->execute([$value]);$u=$s->fetch();return $u?:null;
    }
    private static function encode(string $s): string {return rtrim(strtr(base64_encode($s),'+/','-_'),'=');}
    public function login(array $data): array {
        $name=$data['usuario']??'';$password=$data['contraseña']??$data['password']??'';
        if(!is_string($name)||!is_string($password)||strlen($name)>100||strlen($password)>1000)throw new ApiError(422,'Credenciales inválidas.');
        $u=$this->userBy('usuario',$name);
        if(!$u || !(int)$u['estado'] || !password_verify($password,$u['contraseña']))throw new ApiError(401,'Usuario o contraseña incorrectos, o cuenta desactivada.');
        session_regenerate_id(true);$_SESSION['usuario']=$name;$_SESSION['contraseña']=$password;$_SESSION['api_user_id']=(int)$u['id'];$_SESSION['api_csrf']=bin2hex(random_bytes(32));
        $first=empty($_SESSION['iniciado']);$_SESSION['iniciado']=true;
        $payload=self::encode(json_encode(['sub'=>(int)$u['id'],'exp'=>time()+3600]));
        $token=$payload.'.'.hash_hmac('sha256','incos-api-v1:'.$payload,$u['contraseña']);
        $next=in_array($u['rol'],['Estudiante','Egresado'],true)&&$first?'archivosRegistrar.php':'inicio.php';
        return ['user'=>$this->safe($u),'csrf_token'=>$_SESSION['api_csrf'],'access_token'=>$token,'token_type'=>'Bearer','expires_in'=>3600,'next'=>$next];
    }
    public function current(bool $required=true): ?array {
        $header=$_SERVER['HTTP_AUTHORIZATION']??'';$u=null;
        if($header!=='') {
            if(!preg_match('/^Bearer ([A-Za-z0-9_-]+)\.([a-f0-9]{64})$/D',$header,$m))throw new ApiError(401,'Token inválido.');
            $payload=json_decode(base64_decode(strtr($m[1],'-_','+/')),true);
            if(!is_array($payload)||!isset($payload['sub'],$payload['exp'])||!is_int($payload['sub'])||!is_int($payload['exp'])||$payload['exp']<=time())throw new ApiError(401,'Token vencido o inválido.');
            $u=$this->userBy('id',$payload['sub']);
            if(!$u||!hash_equals(hash_hmac('sha256','incos-api-v1:'.$m[1],$u['contraseña']),$m[2]))throw new ApiError(401,'Token inválido.');
        } elseif(isset($_SESSION['api_user_id']))$u=$this->userBy('id',$_SESSION['api_user_id']);
        elseif(isset($_SESSION['usuario']))$u=$this->userBy('usuario',$_SESSION['usuario']);
        if(!$u||!(int)$u['estado']){if($required)throw new ApiError(401,'Debes iniciar sesión.');return null;}return $u;
    }
    public function safe(array $u): array {unset($u['contraseña']);return $u;}
    public function csrf(): void {
        if(strpos($_SERVER['HTTP_AUTHORIZATION']??'','Bearer ')===0)return;
        if(!hash_equals($_SESSION['api_csrf']??'',$_SERVER['HTTP_X_CSRF_TOKEN']??'') || empty($_SESSION['api_csrf']))throw new ApiError(403,'Token CSRF inválido. Recarga la página.');
    }
    public static function staff(array $u): bool {return in_array($u['rol'],['Directora','Secretario','Administrador','Director','Secretaria'],true);}
    public function requireStaff(): array {$u=$this->current();if(!self::staff($u))throw new ApiError(403,'Esta operación requiere un cargo administrativo.');return $u;}
}
