<?php
/* Controlador compatible con la URL original: admRepo/estudiantesEliminar2.php */

include (MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['cod'];
/*CAMBIAR QUE SEA UN UPDATE DE ESTADO
$consulta = "UPDATE cliente set estado = 'Inactivo' WHERE id_cliente='$cod'";
*/ 
$consulta = \Incos\Models\EstudianteModel::statement003(get_defined_vars());

$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);

if($resultado){
    header("Location: usuarios.php");
}
else{
    require MVC_ROOT . '/app/views/admRepo/estudiantesEliminar2/001.php';
    
}


