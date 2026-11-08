<?php
/* Controlador compatible con la URL original: admRepo/licenciadosRegistrar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');





$consulta=\Incos\Models\TutorModel::statement011(get_defined_vars());
$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);

require MVC_ROOT . '/app/views/admRepo/licenciadosRegistrar/001.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');

            // Modifica la consulta para filtrar los cargos de estudiantes y egresados
            $cons = \Incos\Models\TutorModel::statement012(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);

            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                
require MVC_ROOT . '/app/views/admRepo/licenciadosRegistrar/002.php';
}
            
require MVC_ROOT . '/app/views/admRepo/licenciadosRegistrar/007.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

