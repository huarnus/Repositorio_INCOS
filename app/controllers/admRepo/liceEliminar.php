<?php
/* Controlador compatible con la URL original: admRepo/liceEliminar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['id'];

$consulta=\Incos\Models\TutorModel::statement004(get_defined_vars());
//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta)or die("ERROR AL GUARDAR: " .\Incos\Models\DatabaseModel::error($con));
header("Location: admLista.php?menu=3");

require MVC_ROOT . '/app/views/admRepo/liceEliminar/001.php';
