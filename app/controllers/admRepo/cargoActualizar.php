<?php
/* Controlador compatible con la URL original: admRepo/cargoActualizar.php */

include (MVC_ROOT . '/admRepo/partir/conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$consulta=\Incos\Models\CargoModel::statement001(get_defined_vars());

$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);
if($resultado){
    header("Location: cargoLista.php");
}
else{
    require MVC_ROOT . '/app/views/admRepo/cargoActualizar/001.php';
    
}


require MVC_ROOT . '/app/views/admRepo/cargoActualizar/002.php';
