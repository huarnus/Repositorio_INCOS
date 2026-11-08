<?php
/* Controlador compatible con la URL original: admRepo/admGrabar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$paterno = ucwords(strtolower($_POST['paterno']));
$materno = ucwords(strtolower($_POST['materno']));
$nombre = ucwords(strtolower($_POST['nombre']));
$carnet = $_POST['carnet'];
$correo = $_POST['correo'];
$cargo_id = $_POST['cargo_id'];

$nombreCompleto = $paterno . ' ' . $materno . ' ' . $nombre;

// Generar un hash de contraseña utilizando Bcrypt
$contraseña = password_hash($carnet, PASSWORD_DEFAULT);

// Obtener la primera palabra del nombre antes del espacio
$primerPalabraNombre = strtok($nombre, " ");

// Concatenar la primera letra del apellido paterno y la primera palabra del nombre
$usuario = strtoupper(substr($paterno, 0, 1) . $primerPalabraNombre);

$query = \Incos\Models\GestionModel::statement004(get_defined_vars());

\Incos\Models\DatabaseModel::query($con, $query) or die("ERROR AL GUARDAR: " . \Incos\Models\DatabaseModel::error($con));

// Insertar en la tabla usuarios
$queryUsuarios = \Incos\Models\GestionModel::statement005(get_defined_vars());

\Incos\Models\DatabaseModel::query($con, $queryUsuarios) or die("ERROR AL GUARDAR EN USUARIOS: " . \Incos\Models\DatabaseModel::error($con));

header("Location: admLista.php?menu=4");

require MVC_ROOT . '/app/views/admRepo/admGrabar/001.php';
