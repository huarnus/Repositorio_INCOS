<?php
/* Controlador compatible con la URL original: admRepo/liceUpdate.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$id = $_POST['id'];
$carrrera_id = $_POST['carrrera_id'];
// $carnet = $_POST['carnet'];
$nombre_lice = $_POST['nombre_lice'];


$consulta = \Incos\Models\TutorModel::statement010(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

if ($resultado) {
    header("Location: liceLista.php?sw=3");
} else {
    require MVC_ROOT . '/app/views/admRepo/liceUpdate/001.php';

}

