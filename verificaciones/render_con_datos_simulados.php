<?php
error_reporting(0);
class FixtureResult { public $num_rows=1; private $read=false; function fetch_assoc(){if($this->read)return null;$this->read=true;return fixture();} }
class FixtureConnection { public $connect_errno=0; function query($sql){return mysqli_query($this,$sql);} }
function fixture(){return ['id'=>1,'nombre'=>'Directora','usuario'=>'prueba','contraseña'=>password_hash('prueba',PASSWORD_BCRYPT),'cargo_id'=>9,'estado'=>1,'nombreCompleto'=>'ESTUDIANTE PRUEBA','nombre_carrera'=>'Sistemas','nombreM'=>'Proyecto','instancia'=>'Predefensa','titulo'=>'PROYECTO PRUEBA','nombre_lice'=>'TUTOR PRUEBA','autor'=>'AUTOR PRUEBA','descripcion'=>'Descripción de prueba','tutor'=>'TUTOR','gestion'=>2023,'fecha_publicacion'=>'2023-12-01','ruta'=>'../repositorio2023/','tipo_documento'=>'ejemplo.pdf','id_repo'=>1,'cantidad_estudiantes'=>1,'cantidad_egresados'=>1,'nombre_cargo'=>'Estudiante'];}
function mysqli_connect(...$a){return new FixtureConnection;}
function mysqli_query($c,$sql){$GLOBALS['queries'][]=$sql;return new FixtureResult;}
function mysqli_fetch_assoc($r){return $r->fetch_assoc();}
function mysqli_fetch_array($r){return $r->fetch_assoc();}
function mysqli_num_rows($r){return $r->num_rows;}
function mysqli_real_escape_string($c,$s){return addslashes($s);}
function mysqli_data_seek($r,$i){return true;}
function mysqli_close($c){return true;}
function mysqli_error($c){return '';}
session_save_path('/tmp');session_start();$_SESSION['usuario']='prueba';$_SESSION['contraseña']='prueba';session_write_close();$_GET=['id'=>1,'menu'=>4];$_SERVER['REQUEST_METHOD']='GET';$_SERVER['PHP_SELF']=$argv[2];
$GLOBALS['queries']=[];
register_shutdown_function(function(){file_put_contents($GLOBALS['argv'][3],json_encode(['queries'=>$GLOBALS['queries'],'last_error'=>error_get_last()]));});
chdir($argv[1].'/'.dirname($argv[2]));require $argv[1].'/'.$argv[2];
