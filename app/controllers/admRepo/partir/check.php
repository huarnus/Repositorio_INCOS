<?php
/* Controlador compatible con la URL original: admRepo/partir/check.php */

session_start();

include(MVC_ROOT . '/admRepo/partir/conexion.php');
// Comprobación de sesión
$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];

$consulta = \Incos\Models\GestionModel::statement018(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
$filas = \Incos\Models\DatabaseModel::num_rows($resultado);

if ($filas == 0) {
    header("Location: index.php?sw=2");
    exit;
}

$usuarioC = \Incos\Models\DatabaseModel::fetch_array($resultado);

// Obtener el hash de la contraseña almacenada en la base de datos
$contraseña_hash = $usuarioC['contraseña'];

// Verificar la contraseña utilizando password_verify
if (!password_verify($contraseña, $contraseña_hash)) {
    header("Location: index.php?sw=2");
    exit;
}

// Resto del código para obtener el nombre del cargo
$cargo_id = $usuarioC['cargo_id'];

$query = \Incos\Models\GestionModel::statement019(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $query);
$fila = \Incos\Models\DatabaseModel::fetch_assoc($resultado);

$cargoNombre = $fila['nombre'];

$usuarioC['cargo_id'] = $cargoNombre;

$usuario_id = $usuarioC['id']; // Cambiar a usuario_id si es el campo correcto en tu tabla

$query2 = \Incos\Models\GestionModel::statement020(get_defined_vars());
$resultado2 = \Incos\Models\DatabaseModel::query($con, $query2);
$fila2 = \Incos\Models\DatabaseModel::fetch_assoc($resultado2);

$archivoNombre = $fila2['titulo']; // Asignar el título desde la tabla "archivosinsta" a $archivoNombre

$usuarioC['titulo'] = $archivoNombre;

