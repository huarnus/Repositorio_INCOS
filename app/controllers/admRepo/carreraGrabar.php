<?php
/* Controlador compatible con la URL original: admRepo/carreraGrabar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$nombre_carrera=$_POST['nombre_carrera'];


$consulta=\Incos\Models\CarreraModel::statement004(get_defined_vars());
//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta) or die("ERROR AL GUARDAR: " .\Incos\Models\DatabaseModel::error($con));
header("Location: carreraListar.php?menu=4");

