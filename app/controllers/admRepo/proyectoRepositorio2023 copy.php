<?php
/* Controlador compatible con la URL original: admRepo/proyectoRepositorio2023 copy.php */

// Conectar a la base de datos (asegúrate de incluir las credenciales correctas)
include(MVC_ROOT . '/admRepo/partir/conexion.php');

// Obtener el id_proyecto de la solicitud GET
$idProyecto = isset($_GET['id_pro']) ? $_GET['id_pro'] : null;

if ($idProyecto !== null) {
    // Sanitizar el id_proyecto para evitar inyección de SQL
    $idProyecto = \Incos\Models\DatabaseModel::real_escape_string($con, $idProyecto);

    // Obtener los datos del proyecto_defensa y el archivo asociado
    $selectQuery = \Incos\Models\ProyectoModel::statement035(get_defined_vars());
    $result = \Incos\Models\DatabaseModel::query($con, $selectQuery);

    if ($result) {
        if ($row = \Incos\Models\DatabaseModel::fetch_assoc($result)) {
            // Obtener los datos del proyecto_defensa
            $titulo = \Incos\Models\DatabaseModel::real_escape_string($con, $row['titulo']);
            $estudiante_id = \Incos\Models\DatabaseModel::real_escape_string($con, $row['nombreCompleto']);
            $ruta = \Incos\Models\DatabaseModel::real_escape_string($con, $row['ruta']);
            $tipo_documento = \Incos\Models\DatabaseModel::real_escape_string($con, $row['tipo_documento']);

            // Verificar si la ruta está vacía o no es accesible
            if (empty($ruta) || !file_exists($ruta)) {
                $response = ['status' => 'error', 'message' => 'La ruta del proyecto_defensa está vacía o no es accesible.'];
            } else {
                // Obtener la fecha actual
                $fechaActual = date("Y-m-d");

                // Generar la nueva ruta para la tabla proyectos_repositorio
                $nuevaRuta = "../ruta_proyecto_repositorio/"; // Cambiar esto según tus necesidades

                // Insertar los datos en la tabla proyectos_repositorio
                $insertQuery = \Incos\Models\ProyectoModel::statement036(get_defined_vars());
                if (\Incos\Models\DatabaseModel::query($con, $insertQuery)) {
                    // Éxito en la inserción
                    $nuevoIdRepositorio = \Incos\Models\DatabaseModel::insert_id($con); // Obtener el nuevo ID generado

                    // Mover el archivo del proyecto_defensa a la nueva ruta del proyecto_repositorio
                    $nuevaRutaCompleta = $nuevaRuta . basename($ruta); // Ruta donde se moverá el archivo

                    // Verificar si el movimiento del archivo es exitoso
                    if (rename($ruta, $nuevaRutaCompleta)) {
                        // Éxito al mover el archivo
                        $response = ['status' => 'success', 'message' => 'Datos del proyecto enviado a proyectos_repositorio con éxito.', 'nuevo_id_repositorio' => $nuevoIdRepositorio];
                    } else {
                        // Error al mover el archivo
                        $response = ['status' => 'error', 'message' => 'Error al mover la ruta del proyecto: ' . error_get_last()['message']];
                    }
                } else {
                    // Error en la inserción
                    $response = ['status' => 'error', 'message' => 'Error al enviar los datos del proyecto a proyectos_repositorio: ' . \Incos\Models\DatabaseModel::error($con)];
                }
            }
        } else {
            // No se encontró el proyecto_defensa con el id_pro proporcionado
            $response = ['status' => 'error', 'message' => 'Proyecto no encontrado.'];
        }
    } else {
        // Error en la consulta
        $response = ['status' => 'error', 'message' => 'Error al ejecutar la consulta: ' . \Incos\Models\DatabaseModel::error($con)];
    }
} else {
    // No se proporcionó el id_proyecto
    $response = ['status' => 'error', 'message' => 'ID de proyecto no proporcionado.'];
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
require MVC_ROOT . '/app/views/admRepo/proyectoRepositorio2023 copy/001.php';


// Cerrar la conexión a la base de datos
\Incos\Models\DatabaseModel::close($con);

