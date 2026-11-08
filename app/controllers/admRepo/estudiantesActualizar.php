<?php
/* Controlador compatible con la URL original: admRepo/estudiantesActualizar.php */

include (MVC_ROOT . '/admRepo/partir/conexion.php');

$id=$_POST['id'];
$nombreAp=$_POST['nombreAp'];
$carnet=$_POST['carnet'];

$consulta=\Incos\Models\EstudianteModel::statement001(get_defined_vars());

$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);
if($resultado){
    header("Location: estudiantesListaActivos.php");
}
else{
    require MVC_ROOT . '/app/views/admRepo/estudiantesActualizar/001.php';
    
}


require MVC_ROOT . '/app/views/admRepo/estudiantesActualizar/002.php';
