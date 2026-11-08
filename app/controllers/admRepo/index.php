<?php
/* Controlador compatible con la URL original: admRepo/index.php */

// include(MVC_ROOT . '/admRepo/partir/check.php');
if (isset($_GET['sw'])) {
  # code...
  $sw=$_GET['sw'];
} else {
  $sw=0;
}

if (isset($_GET['menu'])) {
  # code...
  $menu=$_GET['menu'];
} else {
  $menu=0;
}

if (isset($_COOKIE['recordar_usuario'])) {
  $recordar_usuario=$_COOKIE['recordar_usuario'];
} else {
  $recordar_usuario='';
}
if (isset($_COOKIE['recordar_contraseña'])) {
  $recordar_contraseña=$_COOKIE['recordar_contraseña'];
} else {
  $recordar_contraseña='';
}

require MVC_ROOT . '/app/views/admRepo/index/001.php';

              if($sw==1){
                  require MVC_ROOT . '/app/views/admRepo/index/002.php';

              }
              if($sw==2){
                  require MVC_ROOT . '/app/views/admRepo/index/003.php';

              }
              if($sw==3){
                require MVC_ROOT . '/app/views/admRepo/index/004.php';

            }
            if($sw==10){
              require MVC_ROOT . '/app/views/admRepo/index/005.php';

          }
            if($sw==100){
              require MVC_ROOT . '/app/views/admRepo/index/006.php';

          }


          
            if($menu==100){
              require MVC_ROOT . '/app/views/admRepo/index/007.php';

          }
          

      
          
require MVC_ROOT . '/app/views/admRepo/index/008.php';
if($recordar_usuario !=""){require MVC_ROOT . '/app/views/admRepo/index/013.php';
}
require MVC_ROOT . '/app/views/admRepo/index/014.php';

require_once MVC_ROOT . '/app/Api/bridge.php';
