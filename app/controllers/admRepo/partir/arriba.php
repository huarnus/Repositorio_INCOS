<?php
/* Controlador compatible con la URL original: admRepo/partir/arriba.php */

if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
}
else{
    $menu=0;
}


require MVC_ROOT . '/app/views/admRepo/partir/arriba/001.php';
if ($usuarioC['cargo_id']=="Directora" ){
require MVC_ROOT . '/app/views/admRepo/partir/arriba/004.php';
 }
require MVC_ROOT . '/app/views/admRepo/partir/arriba/005.php';
  if ($usuarioC['cargo_id']=="Directora" ||$usuarioC['cargo_id']=="Secretario" ){
require MVC_ROOT . '/app/views/admRepo/partir/arriba/006.php';

  }
  
require MVC_ROOT . '/app/views/admRepo/partir/arriba/007.php';
  if ($usuarioC['cargo_id']=="Secretario" || $usuarioC['cargo_id']=="Directora" ){
require MVC_ROOT . '/app/views/admRepo/partir/arriba/008.php';
 }
require MVC_ROOT . '/app/views/admRepo/partir/arriba/009.php';

require_once MVC_ROOT . '/app/Api/bridge.php';
