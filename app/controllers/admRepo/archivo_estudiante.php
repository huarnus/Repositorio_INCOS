<?php
/* Controlador compatible con la URL original: admRepo/archivo_estudiante.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

$estudiante = $_GET['estudiante']; // Recibimos el ID del estudiante desde la URL

// Consulta para obtener los archivos subidos por el estudiante
$consulta = \Incos\Models\ArchivoModel::statement002(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

require MVC_ROOT . '/app/views/admRepo/archivo_estudiante/001.php';

    if ($resultado && \Incos\Models\DatabaseModel::num_rows($resultado) > 0) {
        // Obtener el título del primer archivo (suponiendo que todos los archivos tienen el mismo título)
        $fila = \Incos\Models\DatabaseModel::fetch_assoc($resultado);
        $titulo = $fila['titulo'];
        \Incos\Models\DatabaseModel::data_seek($resultado, 0); // Reiniciar el puntero del resultado
        
        require MVC_ROOT . '/app/views/admRepo/archivo_estudiante/002.php';
while ($fila = \Incos\Models\DatabaseModel::fetch_assoc($resultado)) {
            $nombreArchivo = $fila['tipo_documento'];
            $rutaArchivo = $fila['ruta'] . $fila['id'] . ".pdf"; // Suponiendo que los archivos se almacenan como PDF
    
require MVC_ROOT . '/app/views/admRepo/archivo_estudiante/004.php';
}
        
        require MVC_ROOT . '/app/views/admRepo/archivo_estudiante/011.php';

    } else {
        require MVC_ROOT . '/app/views/admRepo/archivo_estudiante/012.php';

    }

    \Incos\Models\DatabaseModel::close($con);
    
require MVC_ROOT . '/app/views/admRepo/archivo_estudiante/013.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

