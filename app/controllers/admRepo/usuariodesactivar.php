<?php
/* Controlador compatible con la URL original: admRepo/usuariodesactivar.php */

include (MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['cod'];
/*CAMBIAR QUE SEA UN UPDATE DE ESTADO
$consulta = "UPDATE cliente set estado = 'Inactivo' WHERE id_cliente='$cod'";
*/ 
$consulta = \Incos\Models\UsuarioModel::statement006(get_defined_vars());

$resultado=\Incos\Models\DatabaseModel::query($con,$consulta);

if($resultado){
    header("Location: usuariosEstudiantes.php");
}
else{
    require MVC_ROOT . '/app/views/admRepo/usuariodesactivar/001.php';
    
}


