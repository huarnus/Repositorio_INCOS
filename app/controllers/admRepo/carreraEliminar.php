<?php
/* Controlador compatible con la URL original: admRepo/carreraEliminar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['id'];
$consulta=\Incos\Models\CarreraModel::statement003(get_defined_vars());
//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta)or die("ERROR AL GUARDAR: " .\Incos\Models\DatabaseModel::error($conn));
header("Location: categorialistar.php?menu=4");


