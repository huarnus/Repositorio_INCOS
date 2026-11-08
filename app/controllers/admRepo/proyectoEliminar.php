<?php
/* Controlador compatible con la URL original: admRepo/proyectoEliminar.php */

include (MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['cod'];
/*CAMBIAR QUE SEA UN UPDATE DE ESTADO
$consulta = "UPDATE cliente set estado = 'Inactivo' WHERE id_cliente='$cod'";
*/ 
$consulta = \Incos\Models\ProyectoModel::statement017(get_defined_vars());

$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);

if($resultado){
    header("Location: proyectoLista.php");
}
else{
    require MVC_ROOT . '/app/views/admRepo/proyectoEliminar/001.php';
    
}


