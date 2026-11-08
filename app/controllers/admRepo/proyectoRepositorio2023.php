<?php
/* Controlador compatible con la URL original: admRepo/proyectoRepositorio2023.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$idProyecto = isset($_GET['id_pro']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['id_pro']) : null;

if ($idProyecto !== null) {
    $selectQuery = \Incos\Models\ProyectoModel::statement037(get_defined_vars());
    $result = \Incos\Models\DatabaseModel::query($con, $selectQuery);

    if ($result && $row = \Incos\Models\DatabaseModel::fetch_assoc($result)) {
        $ruta = \Incos\Models\DatabaseModel::real_escape_string($con, $row['ruta']);
        $tipo_documento = \Incos\Models\DatabaseModel::real_escape_string($con, $row['tipo_documento']);

        if (empty($ruta) || !is_dir($ruta)) {
            $response = ['status' => 'error', 'message' => 'La ruta del proyecto_defensa no es un directorio o no es accesible.'];
        } else {
            $nuevaRuta = "../repositorio2023/";

            // Obtén el ID del archivo asociado al proyecto
            $archivoId = $row['archivosinsta_id'];

            // Agregar título, descripción y tutor
            $titulo = $row['titulo'];  // Reemplaza con el título deseado
            $descripcion =$row['descripcion'];  // Reemplaza con la descripción deseada
            $tutor = $row['licenciados_id'];  
            $tutor2 = $row['nombre_lice']; 
            $estudiantes_id = $row['nombreCompleto'];
            $modalidad_id = $row['modalidad_id'];
            $carrrera_id = $row['carrrera_id'];
            $instancia = $row['etapas_instancia_id'];
            $proyectoes_id = $row['proyectoes_id'];
            
                // Obtener el nombre del licenciado
                $nombreLiceQuery = \Incos\Models\ProyectoModel::statement038(get_defined_vars());
                $resultadoNombreLice = \Incos\Models\DatabaseModel::query($con, $nombreLiceQuery);
                $filaNombreLice = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreLice);
                $nombreLice = $filaNombreLice['nombre_lice'];

                // Obtener el nombre de la modalidad
                $nombreModalidadQuery = \Incos\Models\ProyectoModel::statement039(get_defined_vars());
                $resultadoNombreModalidad = \Incos\Models\DatabaseModel::query($con, $nombreModalidadQuery);
                $filaNombreModalidad = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreModalidad);
                $nombreModalidad = $filaNombreModalidad['nombreM'];

                // Obtener el nombre de la carrera
                $nombreCarreraQuery = \Incos\Models\ProyectoModel::statement040(get_defined_vars());
                $resultadoNombreCarrera = \Incos\Models\DatabaseModel::query($con, $nombreCarreraQuery);
                $filaNombreCarrera = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreCarrera);
                $nombreCarrera = $filaNombreCarrera['nombre_carrera'];

                // Obtener el nombre etapa instancia
                $nombreInstanciaQuery = \Incos\Models\ProyectoModel::statement041(get_defined_vars());
                $resultadoNombreInstancia = \Incos\Models\DatabaseModel::query($con, $nombreInstanciaQuery);
                $filaNombreInstancia = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreInstancia);
                $nombreInstancia = $filaNombreInstancia['instancia'];
                // Obtener el nombre proyectoEs
                $nombreTipoQuery = \Incos\Models\ProyectoModel::statement042(get_defined_vars());
                $resultadoNombretipo = \Incos\Models\DatabaseModel::query($con, $nombreTipoQuery);
                $filaNombreTipo = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombretipo);
                $nombreTipo = $filaNombreTipo['proyectoEs'];

            // Recorre todos los archivos en la carpeta original y realiza las operaciones
            $archivos = scandir($ruta);
           
            // Bandera para saber si ya se procesó un archivo
            $archivoProcesado = false;

            foreach ($archivos as $archivo) {
                if ($archivo != "." && $archivo != ".." && !$archivoProcesado) {
                    $rutaArchivoOriginal = $ruta . '/' . $archivo;
                    $rutaNuevaCompleta = $nuevaRuta . $archivo;

                    // Verifica si el elemento es un archivo y no un directorio
                    if (is_file($rutaArchivoOriginal)) {

                        // Obtén el ID del archivo actual
                        $archivoActualId = pathinfo($archivo, PATHINFO_FILENAME);

                        // Compara el ID del archivo actual con el ID del proyecto
                        if ($archivoActualId == $archivoId) {

                            // Crea la estructura de carpetas si no existe en la nueva ubicación
                            if (!is_dir(dirname($rutaNuevaCompleta))) {
                                mkdir(dirname($rutaNuevaCompleta), 0777, true);
                            }
                            // Obtener la fecha actual y el año actual
                            $año_actual = date("Y");
                            date_default_timezone_set('America/La_Paz');
                            $fechaActual = date("Y-m-d");

                            // Registrar la eliminación en la tabla historial_proyectos
                            $historialQuery = \Incos\Models\ProyectoModel::statement043(get_defined_vars());
                            $resultadoHistorial = \Incos\Models\DatabaseModel::query($con, $historialQuery);
                        
                            // Inserta los datos en la nueva tabla
                            $insertQuery = \Incos\Models\ProyectoModel::statement044(get_defined_vars());
                            if (\Incos\Models\DatabaseModel::query($con, $insertQuery)) {
                                // Mueve el archivo con el mismo nombre a la nueva ruta
                                if (rename($rutaArchivoOriginal, $rutaNuevaCompleta)) {
                                    $archivoProcesado = true; // Marcar que ya se procesó un archivo
                                    $response = ['status' => 'success', 'message' => 'Datos del proyecto enviados a proyectos_repositorio con éxito.'];
                                } else {
                                    $response = ['status' => 'error', 'message' => 'Error al mover la ruta del proyecto.'];
                                }
                            } else {
                                $response = ['status' => 'error', 'message' => 'Error al enviar los datos del proyecto a proyectos_repositorio: ' . \Incos\Models\DatabaseModel::error($con)];
                            }
                        } else {
                            // Mensaje de depuración: Puede agregar más información sobre por qué no es el archivo correcto
                            $response = ['status' => 'error', 'message' => 'El archivo no coincide con el ID del proyecto: ' . $archivo];
                        }
                    } else {
                        // Mensaje de depuración: Puede agregar más información sobre por qué no es un archivo válido
                        $response = ['status' => 'error', 'message' => 'El elemento no es un archivo válido: ' . $rutaArchivoOriginal];
                    }
                }
            }
            // Si no se procesó ningún archivo, muestra un mensaje de error
            if (!$archivoProcesado) {
                $response = ['status' => 'error', 'message' => 'No se encontró el archivo correspondiente al proyecto para procesar.'];
            }
            // if (unlink($rutaArchivoOriginal)) {
            $deleteQuery = \Incos\Models\ProyectoModel::statement045(get_defined_vars());
            $resultadoDelete = \Incos\Models\DatabaseModel::query($con, $deleteQuery);

        }
    } else {
        $response = ['status' => 'error', 'message' => $result ? 'Proyecto no encontrado.' : 'Error al ejecutar la consulta: ' . \Incos\Models\DatabaseModel::error($con)];
    }
} else {
    $response = ['status' => 'error', 'message' => 'ID de proyecto no proporcionado.'];
}

header('Content-Type: application/json');
require MVC_ROOT . '/app/views/admRepo/proyectoRepositorio2023/001.php';


\Incos\Models\DatabaseModel::close($con);

