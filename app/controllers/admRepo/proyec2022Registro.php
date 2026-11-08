<?php
/* Controlador compatible con la URL original: admRepo/proyec2022Registro.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');
$consulta = \Incos\Models\ProyectoModel::statement003(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/001.php';
 
if (isset($_GET['sw'])) {
  # code...
  $sw=$_GET['sw'];
} else {
  $sw=0;
}


require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/002.php';

                      if($sw==2){
                          require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/003.php';

                      }
                      if($sw==2000){
                          require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/004.php';

                      }

                      if($sw==1){
                        require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/005.php';

                    } if($sw==4000){
                      require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/006.php';

                  }if($sw==5000){
                    require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/007.php';

                }
                if($sw==6000){
                  require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/008.php';

              }
                

                  
                  //   if($menu==100){
                  //     echo '<div class="alert alert-success">
                  //     <center> Usuario Registrado </center>
                  // </div>';
                  // }
                  
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/009.php';
 if ($usuarioC['cargo_id'] == "Secretario" || $usuarioC['cargo_id'] == "Directora") { 
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/010.php';

    include(MVC_ROOT . '/admRepo/partir/conexion.php');
    $cons = \Incos\Models\ProyectoModel::statement004(get_defined_vars());
    $res = \Incos\Models\DatabaseModel::query($con, $cons);
    while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
    
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/011.php';
}
    
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/016.php';

    include(MVC_ROOT . '/admRepo/partir/conexion.php');
    $cons = \Incos\Models\ProyectoModel::statement005(get_defined_vars());
    $res = \Incos\Models\DatabaseModel::query($con, $cons);
    while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
    
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/017.php';
}
    
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/024.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\ProyectoModel::statement006(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/025.php';
}
            
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/030.php';
 date_default_timezone_set('America/La_Paz');
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/031.php';
} else { 
require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/034.php';
 } 

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/proyec2022Registro/035.php';
