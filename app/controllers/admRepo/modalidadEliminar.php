<?php
/* Controlador compatible con la URL original: admRepo/modalidadEliminar.php */

// include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['id'];

$consulta=\Incos\Models\ModalidadModel::statement003(get_defined_vars());
//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta)or die("ERROR AL GUARDAR: " .\Incos\Models\DatabaseModel::error($con));
header("Location:modalidadListar.php?menu=1");

require MVC_ROOT . '/app/views/admRepo/modalidadEliminar/001.php';
