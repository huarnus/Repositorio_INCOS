<?php
/* Controlador compatible con la URL original: admRepo/proyectoCambiarDefensa.php */

// eliminarDefensa.php

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$estudianteId = $_GET['estudiante_id'];

// Validar y sanear los datos del usuario (por ejemplo, utilizando mysqli_real_escape_string)
$estudianteId = \Incos\Models\DatabaseModel::real_escape_string($con, $estudianteId);

// Obtener el nombre completo, la modalidad y la carrera del estudiante de las tablas estudiantes y proyectos_defensa
$estudianteQuery = \Incos\Models\ProyectoModel::statement007(get_defined_vars());
$resultadoEstudiante = \Incos\Models\DatabaseModel::query($con, $estudianteQuery);

if ($resultadoEstudiante && \Incos\Models\DatabaseModel::num_rows($resultadoEstudiante) > 0) {
    $filaEstudiante = \Incos\Models\DatabaseModel::fetch_assoc($resultadoEstudiante);
    $nombreEstudiante = $filaEstudiante['nombreCompleto'];

    // Obtener la modalidad y carrera del estudiante desde la tabla proyectos_defensa
    $modalidadCarreraQuery = \Incos\Models\ProyectoModel::statement008(get_defined_vars());
    $resultadoModalidadCarrera = \Incos\Models\DatabaseModel::query($con, $modalidadCarreraQuery);

    if ($resultadoModalidadCarrera && \Incos\Models\DatabaseModel::num_rows($resultadoModalidadCarrera) > 0) {
        $filaModalidadCarrera = \Incos\Models\DatabaseModel::fetch_assoc($resultadoModalidadCarrera);
        $modalidadId = $filaModalidadCarrera['modalidad_id'];
        $carreraId = $filaModalidadCarrera['carrrera_id'];
        $titulo = $filaModalidadCarrera['titulo'];
        $proyectoes_id = $filaModalidadCarrera['proyectoes_id'];
        $etapas_instancia_id = $filaModalidadCarrera['etapas_instancia_id'];
        $descripcion = $filaModalidadCarrera['descripcion'];
        $tutor = $filaModalidadCarrera['licenciados_id'];
        $gestion = $filaModalidadCarrera['gestion'];
        $fecha_entrega = $filaModalidadCarrera['fecha_entrega'];

         // Obtener el nombre del licenciado
         $nombreLiceQuery = \Incos\Models\ProyectoModel::statement009(get_defined_vars());
         $resultadoNombreLice = \Incos\Models\DatabaseModel::query($con, $nombreLiceQuery);
         $filaNombreLice = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreLice);
         $nombreLice = $filaNombreLice['nombre_lice'];
        
        // Obtener el nombre de la modalidad
        $nombreModalidadQuery = \Incos\Models\ProyectoModel::statement010(get_defined_vars());
        $resultadoNombreModalidad = \Incos\Models\DatabaseModel::query($con, $nombreModalidadQuery);
        $filaNombreModalidad = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreModalidad);
        $nombreModalidad = $filaNombreModalidad['nombreM'];

        // Obtener el nombre de la carrera
        $nombreCarreraQuery = \Incos\Models\ProyectoModel::statement011(get_defined_vars());
        $resultadoNombreCarrera = \Incos\Models\DatabaseModel::query($con, $nombreCarreraQuery);
        $filaNombreCarrera = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreCarrera);
        $nombreCarrera = $filaNombreCarrera['nombre_carrera'];

        // Obtener el nombre proyectoEs
        $nombreTipoQuery = \Incos\Models\ProyectoModel::statement012(get_defined_vars());
        $resultadoNombretipo = \Incos\Models\DatabaseModel::query($con, $nombreTipoQuery);
        $filaNombreTipo = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombretipo);
        $nombreTipo = $filaNombreTipo['proyectoEs'];

        // Obtener el nombre etapa instancia
        $nombreInstanciaQuery = \Incos\Models\ProyectoModel::statement013(get_defined_vars());
        $resultadoNombreInstancia = \Incos\Models\DatabaseModel::query($con, $nombreInstanciaQuery);
        $filaNombreInstancia = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreInstancia);
        $nombreInstancia = $filaNombreInstancia['instancia'];

        // Registrar la eliminación en la tabla historial_proyectos
        $historialQuery = \Incos\Models\ProyectoModel::statement014(get_defined_vars());
        $resultadoHistorial = \Incos\Models\DatabaseModel::query($con, $historialQuery);
       
        // Verificar si el estudiante existe en la tabla archivosinsta
        $verificacionQuery = \Incos\Models\ProyectoModel::statement015(get_defined_vars());
        $resultadoVerificacion = \Incos\Models\DatabaseModel::query($con, $verificacionQuery);

        if (\Incos\Models\DatabaseModel::num_rows($resultadoVerificacion) > 0) {
            // Si existen registros en archivosinsta para el estudiante, eliminarlos
            $deleteQuery = \Incos\Models\ProyectoModel::statement016(get_defined_vars());
            $resultadoEliminacion = \Incos\Models\DatabaseModel::query($con, $deleteQuery);

            // header("Location: proyectoLista.php?sw=1");

            if ($resultadoEliminacion) {
                // La eliminación fue exitosa
               
                $response = array('status' => 'success', 'message' => "Los registros del estudiante $nombreEstudiante en archivosinsta han sido eliminados correctamente");
                
            } else {
                // Error al ejecutar la consulta de eliminación
                $response = array('status' => 'error', 'message' => "Error al eliminar los registros de archivosinsta: " . \Incos\Models\DatabaseModel::error($con));
            }
        } else {
            // No existen registros en archivosinsta para el estudiante
            $response = array('status' => 'info', 'message' => "No hay registros en archivosinsta para el estudiante $nombreEstudiante");
        }
    } else {
        // No se encontró la modalidad y carrera del estudiante en la tabla proyecto_defensa
        $response = array('status' => 'error', 'message' => "No se encontró la modalidad y carrera del estudiante con ID $estudianteId en la tabla proyecto_defensa");
    }
} else {
    // No se encontró el nombre completo del estudiante en la tabla estudiantes
    $response = array('status' => 'error', 'message' => "No se encontró el nombre completo del estudiante con ID $estudianteId en la tabla estudiantes");
}

require MVC_ROOT . '/app/views/admRepo/proyectoCambiarDefensa/001.php';


