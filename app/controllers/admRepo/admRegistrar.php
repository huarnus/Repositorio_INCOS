<?php
/* Controlador compatible con la URL original: admRepo/admRegistrar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

$consulta=\Incos\Models\GestionModel::statement007(get_defined_vars());
$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);

require MVC_ROOT . '/app/views/admRepo/admRegistrar/001.php';
 while ($dato=\Incos\Models\DatabaseModel::fetch_array($resultado)){ 
require MVC_ROOT . '/app/views/admRepo/admRegistrar/002.php';
}
require MVC_ROOT . '/app/views/admRepo/admRegistrar/007.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');

            // Modifica la consulta para filtrar los cargos de estudiantes y egresados
            $cons = \Incos\Models\GestionModel::statement008(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);

            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                
require MVC_ROOT . '/app/views/admRepo/admRegistrar/008.php';
}
            
require MVC_ROOT . '/app/views/admRepo/admRegistrar/013.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/admRegistrar/014.php';
