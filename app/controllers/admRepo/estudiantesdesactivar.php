<?php
/* Controlador compatible con la URL original: admRepo/estudiantesdesactivar.php */

include (MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['id'];
/*CAMBIAR QUE SEA UN UPDATE DE ESTADO
$consulta = "UPDATE cliente set estado = 'Inactivo' WHERE id_cliente='$cod'";
*/ 
$consulta = \Incos\Models\EstudianteModel::statement006(get_defined_vars());

$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);

if($resultado){
    header("Location: estudiantesListaActivos.php");
}
else{
    require MVC_ROOT . '/app/views/admRepo/estudiantesdesactivar/001.php';
    
}


