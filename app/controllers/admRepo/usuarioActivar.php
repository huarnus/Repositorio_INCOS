<?php
/* Controlador compatible con la URL original: admRepo/usuarioActivar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

// Obtener datos del cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$estado = $data->estado;

// Actualizar el estado en la base de datos
$query = \Incos\Models\UsuarioModel::statement001(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $query);

if ($resultado) {
    // La actualización fue exitosa, enviar respuesta JSON al cliente
    require MVC_ROOT . '/app/views/admRepo/usuarioActivar/001.php';

} else {
    // Error al actualizar, enviar mensaje de error al cliente
    require MVC_ROOT . '/app/views/admRepo/usuarioActivar/002.php';

}

\Incos\Models\DatabaseModel::close($con);

