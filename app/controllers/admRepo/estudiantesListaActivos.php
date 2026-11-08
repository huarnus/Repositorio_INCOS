<?php
/* Controlador compatible con la URL original: admRepo/estudiantesListaActivos.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');


require MVC_ROOT . '/app/views/admRepo/estudiantesListaActivos/001.php';

        include(MVC_ROOT . '/admRepo/partir/conexion.php');

        $consulta = \Incos\Models\EstudianteModel::statement004(get_defined_vars());

        if(isset($_GET['buscar']) && !empty($_GET['buscar']) && isset($_GET['filtro']) && !empty($_GET['filtro'])) {
            $filtro = $_GET['filtro'];
            $buscar = $_GET['buscar'];

            switch($filtro) {
                case 'nombre':
                    $consulta .= " AND ca.nombre LIKE '%$buscar%'";
                    break;
               
                case 'nombreEstudiante':
                    $consulta .= " AND CONCAT(e.nombreCompleto) LIKE '%$buscar%'";
                    break;
           
                // case 'estado':
                //     $consulta .= " AND e.estado LIKE '%$buscar%'";
                //     break;
            }
        }

        $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
        while ($tupla = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/estudiantesListaActivos/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/estudiantesListaActivos/025.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/estudiantesListaActivos/026.php';
