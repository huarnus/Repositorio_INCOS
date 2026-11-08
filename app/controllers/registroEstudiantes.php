<?php
/* Controlador compatible con la URL original: registroEstudiantes.php */
 

include(MVC_ROOT . '/partir/arriba.php');


require MVC_ROOT . '/app/views/registroEstudiantes/001.php';
 
if (isset($_GET['sw'])) {
  # code...
  $sw=$_GET['sw'];
} else {
  $sw=0;
}


require MVC_ROOT . '/app/views/registroEstudiantes/002.php';

                      if($sw==1000){
                          require MVC_ROOT . '/app/views/registroEstudiantes/003.php';

                      }
                      if($sw==2000){
                          require MVC_ROOT . '/app/views/registroEstudiantes/004.php';

                      }

                      if($sw==3000){
                        require MVC_ROOT . '/app/views/registroEstudiantes/005.php';

                    } if($sw==4000){
                      require MVC_ROOT . '/app/views/registroEstudiantes/006.php';

                  }if($sw==5000){
                    require MVC_ROOT . '/app/views/registroEstudiantes/007.php';

                }
                if($sw==6000){
                  require MVC_ROOT . '/app/views/registroEstudiantes/008.php';

              }
                

                  
                  //   if($menu==100){
                  //     echo '<div class="alert alert-success">
                  //     <center> Usuario Registrado </center>
                  // </div>';
                  // }
                  
require MVC_ROOT . '/app/views/registroEstudiantes/009.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');

            // Modifica la consulta para filtrar los cargos de estudiantes y egresados
            $cons = \Incos\Models\PublicoModel::statement052(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);

            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                
require MVC_ROOT . '/app/views/registroEstudiantes/010.php';
}
            
require MVC_ROOT . '/app/views/registroEstudiantes/015.php';
 include(MVC_ROOT . '/partir/abajo.php');
require MVC_ROOT . '/app/views/registroEstudiantes/016.php';
