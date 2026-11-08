<?php
/* Controlador compatible con la URL original: admRepo/modalidadGrabar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');


$nombreM=$_POST['nombreM'];


$consulta=\Incos\Models\ModalidadModel::statement004(get_defined_vars());
//ejecutar la consulta
\Incos\Models\DatabaseModel::query($con,$consulta) or die("ERROR AL GUARDAR: " .\Incos\Models\DatabaseModel::error($con));
header("Location: modalidadListar.php?menu=4");


require MVC_ROOT . '/app/views/admRepo/modalidadGrabar/001.php';
