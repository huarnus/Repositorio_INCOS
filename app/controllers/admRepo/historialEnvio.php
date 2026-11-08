<?php
/* Controlador compatible con la URL original: admRepo/historialEnvio.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');


require MVC_ROOT . '/app/views/admRepo/historialEnvio/001.php';
include(MVC_ROOT . '/admRepo/partir/conexion.php');

    $selectQuery = \Incos\Models\GestionModel::statement010(get_defined_vars());

    if (isset($_GET['buscar']) && !empty($_GET['buscar']) && isset($_GET['filtro']) && !empty($_GET['filtro'])) {
        $filtro = $_GET['filtro'];
        $buscar = $_GET['buscar'];

        switch ($filtro) {
            case 'estudiante':
                $selectQuery .= " WHERE h.estudiante_nombre LIKE '%$buscar%'";
                break;
                case 'instancia':
                    $selectQuery .= " WHERE h.etapas_instancia LIKE '%$buscar%'";
                    break;

                    case 'modalidad':
                        $selectQuery .= " WHERE h.modalidad LIKE '%$buscar%'";
    
                        break;
    
                    case 'tutor':
                        $selectQuery .= " WHERE h.tutor LIKE '%$buscar%'";
                        break;
                    case 'titulo':
                        $selectQuery .= " WHERE h.titulo LIKE '%$buscar%'";
                        break;
                        case 'carrera':
                            $selectQuery .= " WHERE h.carrera LIKE '%$buscar%'";
                            break;
        }
    }

    $result = \Incos\Models\DatabaseModel::query($con, $selectQuery);
    while ($row = \Incos\Models\DatabaseModel::fetch_assoc($result)) {
    
require MVC_ROOT . '/app/views/admRepo/historialEnvio/006.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/admRepo/historialEnvio/013.php';
} 
require MVC_ROOT . '/app/views/admRepo/historialEnvio/016.php';
} 
require MVC_ROOT . '/app/views/admRepo/historialEnvio/033.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

