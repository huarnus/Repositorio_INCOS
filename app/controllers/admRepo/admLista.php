<?php
/* Controlador compatible con la URL original: admRepo/admLista.php */


include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/admLista/001.php';

        $consulta=\Incos\Models\GestionModel::statement006(get_defined_vars());
        $resultado=\Incos\Models\DatabaseModel::query($con, $consulta); //consulta y me devuelve una matriz de datos
        while($dato=\Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/admLista/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/admLista/021.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

