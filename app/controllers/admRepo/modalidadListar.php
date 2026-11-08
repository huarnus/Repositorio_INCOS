<?php
/* Controlador compatible con la URL original: admRepo/modalidadListar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/modalidadListar/001.php';

        $consulta=\Incos\Models\ModalidadModel::statement005(get_defined_vars());
        $resultado=\Incos\Models\DatabaseModel::query($con,$consulta); //consulta y me devuelve una matriz de datos
        while ($dato=\Incos\Models\DatabaseModel::fetch_array($resultado)) {
            # code...
        
require MVC_ROOT . '/app/views/admRepo/modalidadListar/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/modalidadListar/011.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/modalidadListar/012.php';
