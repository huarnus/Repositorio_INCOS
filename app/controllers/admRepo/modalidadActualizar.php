<?php
/* Controlador compatible con la URL original: admRepo/modalidadActualizar.php */

// include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_POST['id'];
$nombreM=$_POST['nombreM'];

$consulta=\Incos\Models\ModalidadModel::statement001(get_defined_vars());

//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta);
header("Location: modalidadListar.php?menu=1");

require MVC_ROOT . '/app/views/admRepo/modalidadActualizar/001.php';
