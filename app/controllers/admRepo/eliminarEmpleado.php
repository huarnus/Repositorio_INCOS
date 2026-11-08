<?php
/* Controlador compatible con la URL original: admRepo/eliminarEmpleado.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id = $_GET['cod'];
/*CAMBIAR QUE SEA UN UPDATE DE ESTADO
$consulta = "UPDATE cliente set estado = 'Inactivo' WHERE id_cliente='$cod'";
*/
$consulta = \Incos\Models\GestionModel::statement009(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

if ($resultado) {
    header("Location: listaEmpleados.php");
} else {
    require MVC_ROOT . '/app/views/admRepo/eliminarEmpleado/001.php';

}

