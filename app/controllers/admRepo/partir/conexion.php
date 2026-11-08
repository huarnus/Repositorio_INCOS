<?php
/* Controlador compatible con la URL original: admRepo/partir/conexion.php */
 
    $con=\Incos\Models\DatabaseModel::connectConfigured();
    if ($con -> connect_errno) {
        require MVC_ROOT . '/app/views/admRepo/partir/conexion/001.php';

        exit;
    }

