<?php
/* Controlador compatible con la URL original: registroEstudiantes copy.php */
 include(MVC_ROOT . '/partir/arriba.php');
require MVC_ROOT . '/app/views/registroEstudiantes copy/001.php';
 
if (isset($_GET['sw'])) {
  # code...
  $sw=$_GET['sw'];
} else {
  $sw=0;
}


require MVC_ROOT . '/app/views/registroEstudiantes copy/002.php';

                      if($sw==1000){
                          require MVC_ROOT . '/app/views/registroEstudiantes copy/003.php';

                      }
                      if($sw==2000){
                          require MVC_ROOT . '/app/views/registroEstudiantes copy/004.php';

                      }

                      if($sw==3000){
                        require MVC_ROOT . '/app/views/registroEstudiantes copy/005.php';

                    } if($sw==4000){
                      require MVC_ROOT . '/app/views/registroEstudiantes copy/006.php';

                  }if($sw==4000){
                    require MVC_ROOT . '/app/views/registroEstudiantes copy/007.php';

                }

                  
                  //   if($menu==100){
                  //     echo '<div class="alert alert-success">
                  //     <center> Usuario Registrado </center>
                  // </div>';
                  // }
                  
require MVC_ROOT . '/app/views/registroEstudiantes copy/008.php';

                            include(MVC_ROOT . '/admRepo/partir/conexion.php');
                            $cons = \Incos\Models\PublicoModel::statement048(get_defined_vars());
                            $res = \Incos\Models\DatabaseModel::query($con, $cons);
                            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/009.php';
}
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/014.php';

                            include(MVC_ROOT . '/admRepo/partir/conexion.php');
                            $cons = \Incos\Models\PublicoModel::statement049(get_defined_vars());
                            $res = \Incos\Models\DatabaseModel::query($con, $cons);
                            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/015.php';
}
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/020.php';

                            include(MVC_ROOT . '/admRepo/partir/conexion.php');
                            $cons = \Incos\Models\PublicoModel::statement050(get_defined_vars());
                            $res = \Incos\Models\DatabaseModel::query($con, $cons);
                            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/021.php';
}
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/026.php';

                            include(MVC_ROOT . '/admRepo/partir/conexion.php');
                            $cons = \Incos\Models\PublicoModel::statement051(get_defined_vars());
                            $res = \Incos\Models\DatabaseModel::query($con, $cons);
                            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/027.php';
}  
                            
require MVC_ROOT . '/app/views/registroEstudiantes copy/032.php';
include(MVC_ROOT . '/partir/abajo.php');
