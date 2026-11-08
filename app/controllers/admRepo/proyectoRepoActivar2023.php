<?php
/* Controlador compatible con la URL original: admRepo/proyectoRepoActivar2023.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

// Obtener datos del cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$estado = $data->estado;

// Actualizar el estado en la base de datos
$query = \Incos\Models\ProyectoModel::statement033(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $query);

if ($resultado) {
    // La actualización fue exitosa, enviar respuesta JSON al cliente
    require MVC_ROOT . '/app/views/admRepo/proyectoRepoActivar2023/001.php';

} else {
    // Error al actualizar, enviar mensaje de error al cliente
    require MVC_ROOT . '/app/views/admRepo/proyectoRepoActivar2023/002.php';

}

\Incos\Models\DatabaseModel::close($con);

