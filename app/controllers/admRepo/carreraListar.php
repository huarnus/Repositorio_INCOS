<?php
/* Controlador compatible con la URL original: admRepo/carreraListar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/carreraListar/001.php';

        $consulta=\Incos\Models\CarreraModel::statement005(get_defined_vars());
        $resultado=\Incos\Models\DatabaseModel::query($con,$consulta); //consulta y me devuelve una matriz de datos
        while ($dato=\Incos\Models\DatabaseModel::fetch_array($resultado)) {
            # code...
        
require MVC_ROOT . '/app/views/admRepo/carreraListar/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/carreraListar/011.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/carreraListar/012.php';
