<?php
/* Controlador compatible con la URL original: admRepo/cargoTipoEstudiante.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/cargoTipoEstudiante/001.php';

        $consulta = \Incos\Models\CargoModel::statement006(get_defined_vars());

        $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
        while ($tupla = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/cargoTipoEstudiante/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/cargoTipoEstudiante/009.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

