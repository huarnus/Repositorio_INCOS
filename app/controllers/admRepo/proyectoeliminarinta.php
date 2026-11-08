<?php
/* Controlador compatible con la URL original: admRepo/proyectoeliminarinta.php */

// proyectoInstanciaCambiar.php

// Incluir archivo de conexión a la base de datos
include(MVC_ROOT . '/admRepo/partir/conexion.php');

// Obtener el id_pro y la nueva instancia de la solicitud
$id_pro = $_GET['id'];
$nuevaInstancia = $_GET['instancia'];

// Realizar la consulta para actualizar la instancia y verificar al mismo tiempo
$query = \Incos\Models\ProyectoModel::statement046(get_defined_vars());

$result = \Incos\Models\DatabaseModel::query($con, $query);

// Comprobar si la actualización fue exitosa
if ($result) {
    // Realizar la verificación y eliminación de datos en archivoinsta
    $verificarYEliminarQuery = \Incos\Models\ProyectoModel::statement047(get_defined_vars());

    $verificarYEliminarResult = \Incos\Models\DatabaseModel::query($con, $verificarYEliminarQuery);

    // Comprobar si la verificación y eliminación fueron exitosas
    if ($verificarYEliminarResult) {
        $response = ['success' => true, 'message' => 'Instancia actualizada y datos en archivoinsta eliminados correctamente'];
    } else {
        $response = ['success' => false, 'message' => 'Error al verificar y eliminar datos en archivoinsta: ' . \Incos\Models\DatabaseModel::error($con)];
    }
} else {
    $response = ['success' => false, 'message' => 'Error al actualizar la instancia: ' . \Incos\Models\DatabaseModel::error($con)];
}

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
require MVC_ROOT . '/app/views/admRepo/proyectoeliminarinta/001.php';


