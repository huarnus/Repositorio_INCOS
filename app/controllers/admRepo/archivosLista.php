<?php
/* Controlador compatible con la URL original: admRepo/archivosLista.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

// Realiza una consulta para obtener el campo "tipo_documento" agrupado por estudiante
$consulta = \Incos\Models\ArchivoModel::statement005(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

require MVC_ROOT . '/app/views/admRepo/archivosLista/001.php';

        // Itera a través de los resultados y muestra cada estudiante con sus tipos de documento y el título en la tabla
        while ($fila = \Incos\Models\DatabaseModel::fetch_assoc($resultado)) {
            require MVC_ROOT . '/app/views/admRepo/archivosLista/002.php';

            // echo "<td>" . $fila['id'] . "</td>";
            require MVC_ROOT . '/app/views/admRepo/archivosLista/003.php';
}
        
require MVC_ROOT . '/app/views/admRepo/archivosLista/010.php';

// Cierra la conexión a la base de datos
\Incos\Models\DatabaseModel::close($con);
include(MVC_ROOT . '/admRepo/partir/abajo.php');

