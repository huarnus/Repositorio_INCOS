<?php
/* Controlador compatible con la URL original: admRepo/carreraEdit.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');
$id=$_GET['id'];
$consulta=\Incos\Models\CarreraModel::statement002(get_defined_vars());
$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);
$dato=\Incos\Models\DatabaseModel::fetch_array($resultado);

require MVC_ROOT . '/app/views/admRepo/carreraEdit/001.php';
include(MVC_ROOT . '/admRepo/partir/abajo.php');

