<?php
/* Controlador compatible con la URL original: admRepo/archivosRegistrar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/archivosRegistrar/001.php';

// Obtén el nombre del usuario en línea
$nombreUsuario = $usuarioC['nombre'];

// Consulta para verificar si el usuario ya tiene archivos registrados
$consulta_archivos = \Incos\Models\ArchivoModel::statement006(get_defined_vars());
$resultado_archivos = \Incos\Models\DatabaseModel::query($con, $consulta_archivos);

// Si el usuario ya tiene archivos registrados, redirígelo a inicio.php
if (\Incos\Models\DatabaseModel::num_rows($resultado_archivos) > 1) {
  require MVC_ROOT . '/app/views/admRepo/archivosRegistrar/002.php';

  exit();
}

ob_end_flush(); // Envía la salida almacenada al navegador

require MVC_ROOT . '/app/views/admRepo/archivosRegistrar/003.php';
 if ($usuarioC['cargo_id'] == "Egresado" || $usuarioC['cargo_id'] == "Estudiante"|| $usuarioC['cargo_id'] == "Directora") { 
require MVC_ROOT . '/app/views/admRepo/archivosRegistrar/004.php';
} else { 
require MVC_ROOT . '/app/views/admRepo/archivosRegistrar/007.php';
 } 

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/archivosRegistrar/008.php';
