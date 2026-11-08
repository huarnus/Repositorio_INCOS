<?php
/* Controlador compatible con la URL original: admRepo/liceGrabar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$nombre = ucwords(strtolower($_POST['nombre_lice']));
$carrrera_id = $_POST['carrrera_id'];

// Verificar si el nombre ya existe con la misma carrera_id
$verificar_query = \Incos\Models\TutorModel::statement005(get_defined_vars());
$verificar_resultado = \Incos\Models\DatabaseModel::query($con, $verificar_query);
$verificar_fila = \Incos\Models\DatabaseModel::fetch_assoc($verificar_resultado);

if ($verificar_fila['count'] > 0) {
    // El nombre ya existe con la misma carrera_id, redireccionar a pagina_existe.php
    header("Location: liceLista.php?sw=1");
    exit;
}

// Si el nombre no existe con la misma carrera_id, realizar la inserción
$query = \Incos\Models\TutorModel::statement006(get_defined_vars());

\Incos\Models\DatabaseModel::query($con, $query) or die("ERROR AL GUARDAR: " . \Incos\Models\DatabaseModel::error($con));

header("Location: liceLista.php?sw=2");

