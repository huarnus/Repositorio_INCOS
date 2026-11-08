<?php
/* Controlador compatible con la URL original: admRepo/proyectoGrabar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$titulo = $_POST['titulo'];
$estudiantes_id = $_POST['estudiantes_id'];
$descripcion = $_POST['descripcion'];
$licenciados_id = $_POST['licenciados_id'];
$gestion = $_POST['gestion'];
$fecha_entrega = $_POST['fecha_entrega'];
$modalidad_id = $_POST['modalidad_id'];
$carrrera_id = $_POST['carrrera_id'];
$proyectoes_id = $_POST['proyectoes_id'];
$archivosinsta_id = $_POST['archivosinsta_id'];
$etapas_instancia_id = $_POST['etapas_instancia_id'];

// Convertir la fecha al formato 'Y-m-d'
$fecha_entrega_formato_correcto = DateTime::createFromFormat('d-m-Y', $fecha_entrega)->format('Y-m-d');



// Insertar los valores en la tabla de proyectos
$insertQuery = \Incos\Models\ProyectoModel::statement026(get_defined_vars());

\Incos\Models\DatabaseModel::query($con, $insertQuery);
header("Location: inicio.php");

