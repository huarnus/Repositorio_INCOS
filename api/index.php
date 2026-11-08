<?php
// Punto de entrada JSON. Sin HTML, plantillas ni redirecciones del panel.
require_once dirname(__DIR__).'/app/bootstrap.php';
foreach(['Http','Connection','ResourceRepository','AuthController','ResourceController','FileController','PublicationController','EnrollmentController'] as $file)require_once MVC_ROOT.'/app/Api/'.$file.'.php';
use Incos\Api\{Http,ApiError,Connection,AuthController,ResourceController,FileController,PublicationController,EnrollmentController};
ini_set('display_errors','0');
set_error_handler(function($severity,$message,$file,$line){if(!(error_reporting()&$severity))return false;throw new ErrorException($message,0,$severity,$file,$line);});
try {
    $route=$_GET['route']??($_SERVER['PATH_INFO']??'/v1');
    if(!is_string($route))throw new ApiError(400,'Ruta inválida.');
    $parts=explode('/',trim($route,'/'));$method=$_SERVER['REQUEST_METHOD']??'GET';
    if(($parts[0]??'')!=='v1')throw new ApiError(404,'Versión no encontrada.');
    $resource=$parts[1]??'';$tail=$parts[2]??null;
    $definitions=json_decode(file_get_contents(MVC_ROOT.'/app/Api/resources.json'),true);
    if($method==='GET'&&($resource===''||$resource==='health')) {Http::json(['data'=>['name'=>'Repositorio INCOS API','version'=>'1.0.0','status'=>'ok','database'=>'no comprobada en este endpoint','resources'=>array_keys($definitions)]]);return;}
    if($method==='OPTIONS'){header('Allow: GET, POST, PUT, PATCH, DELETE, OPTIONS');http_response_code(204);return;}
    if(session_status()!==PHP_SESSION_ACTIVE)session_start(['cookie_httponly'=>true,'cookie_samesite'=>'Lax']);
    if(empty($_SESSION['api_csrf']))$_SESSION['api_csrf']=bin2hex(random_bytes(32));
    if($resource==='auth'&&$tail==='csrf'&&$method==='GET'){Http::json(['data'=>['csrf_token'=>$_SESSION['api_csrf']]]);return;}
    if(count($parts)>4)throw new ApiError(404,'Ruta no encontrada.');
    $db=Connection::open();$auth=new AuthController($db);
    if($resource==='auth') {
        if($tail==='login'&&$method==='POST'){$auth->csrf();Http::json(['data'=>$auth->login(Http::body())]);return;}
        if($tail==='me'&&$method==='GET'){Http::json(['data'=>$auth->safe($auth->current())]);return;}
        if($tail==='logout'&&$method==='POST'){$auth->current();$auth->csrf();$_SESSION=[];session_regenerate_id(true);Http::json(['data'=>null,'message'=>'Sesión cerrada. Los tokens Bearer emitidos vencen al cumplirse una hora.']);return;}
        throw new ApiError(405,'Operación de autenticación no permitida.');
    }
    if($resource==='inscripciones'&&$tail===null&&$method==='POST'){(new EnrollmentController($db,$auth,$definitions))->create(Http::body());return;}
    if($resource==='administrativos'&&$tail==='alta'&&$method==='POST'){(new EnrollmentController($db,$auth,$definitions))->create(Http::body(),true);return;}
    if($resource==='archivos'&&$tail===null&&$method==='POST'){(new FileController($db,$auth,$definitions))->upload();return;}
    if($resource==='repositorio-2022'&&$tail==='documentos'&&$method==='POST'){(new FileController($db,$auth,$definitions))->upload(true);return;}
    $id=$tail===null?null:Http::id($tail);$action=$parts[3]??null;
    if($action==='documento'&&in_array($resource,['archivos','repositorio','repositorio-2022'],true)&&$method==='GET'){(new FileController($db,$auth,$definitions))->download($resource,$id);return;}
    if($resource==='proyectos'&&$action==='publicacion'&&$method==='POST'){(new PublicationController($db,$auth,$definitions))->publish($id);return;}
    if($action!==null)throw new ApiError(404,'Ruta no encontrada.');
    (new ResourceController($db,$auth,$definitions))->handle($resource,$id,$method);
} catch(ApiError $e) {Http::json(['error'=>['code'=>$e->status,'message'=>$e->getMessage(),'details'=>(object)$e->details]],$e->status);}
catch(PDOException $e){error_log('INCOS API database: '.$e->getMessage());$integrity=$e->getCode()==='23000';Http::json(['error'=>['code'=>$integrity?409:503,'message'=>$integrity?'La operación entra en conflicto con registros relacionados.':'No se pudo completar la operación con la base de datos.']],$integrity?409:503);}
catch(Throwable $e){error_log('INCOS API: '.$e->getMessage());Http::json(['error'=>['code'=>500,'message'=>'No se pudo completar la operación.']],500);}
