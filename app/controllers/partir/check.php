<?php
/* Controlador compatible con la URL original: partir/check.php */


include(MVC_ROOT . '/partir/conexion.php');

// Comprobación de sesión
$usuario = $_SESSION['usuario'];

$consulta = \Incos\Models\PublicoModel::statement047(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
$filas = \Incos\Models\DatabaseModel::num_rows($resultado);


$usuarioC = \Incos\Models\DatabaseModel::fetch_array($resultado);
$usuario = $usuarioC['usuario']; // Asignar el valor del campo 'usuario' a la variable $usuario

// Ahora puedes usar $usuario en tu aplicación para hacer referencia al nombre de usuario del usuario autenticado.

require MVC_ROOT . '/app/views/partir/check/001.php';
