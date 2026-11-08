<?php
/* Controlador compatible con la URL original: admRepo/cargoModificar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php'); 
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['cod'];
$consulta = \Incos\Models\CargoModel::statement005(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con,$consulta);
$dato = \Incos\Models\DatabaseModel::fetch_array($resultado);


require MVC_ROOT . '/app/views/admRepo/cargoModificar/001.php';
include(MVC_ROOT . '/admRepo/partir/abajo.php'); 
require MVC_ROOT . '/app/views/admRepo/cargoModificar/006.php';
