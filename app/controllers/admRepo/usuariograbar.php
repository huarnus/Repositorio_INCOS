<?php
/* Controlador compatible con la URL original: admRepo/usuariograbar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];
$carnet = $_POST['carnet'];

// Insertar los valores en la tabla de usuarios
$insertQuery = \Incos\Models\UsuarioModel::statement007(get_defined_vars());
\Incos\Models\DatabaseModel::query($con, $insertQuery);



