<?php
/* Controlador compatible con la URL original: admRepo/carreraActualizar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_POST['id'];
$nombre_carrera=$_POST['nombre_carrera'];

$consulta=\Incos\Models\CarreraModel::statement001(get_defined_vars());

//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta);
header("Location: carreraListar.php?menu=4");

