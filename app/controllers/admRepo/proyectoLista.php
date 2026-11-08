<?php
/* Controlador compatible con la URL original: admRepo/proyectoLista.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');


require MVC_ROOT . '/app/views/admRepo/proyectoLista/001.php';
include(MVC_ROOT . '/admRepo/partir/conexion.php');

    $selectQuery = \Incos\Models\ProyectoModel::statement029(get_defined_vars());


        if(isset($_GET['buscar']) && !empty($_GET['buscar']) && isset($_GET['filtro']) && !empty($_GET['filtro'])) {
            $filtro = $_GET['filtro'];
            $buscar = $_GET['buscar'];

            switch($filtro) {
                case 'carrera':
                    $selectQuery .= " AND c.nombre_carrera LIKE '%$buscar%'";
                    break;
               
                case 'estudiante':
                    $selectQuery .= " AND e.nombreCompleto LIKE '%$buscar%'";
                    break;
           
                case 'modalidad':
                    $selectQuery .= " AND m.nombreM LIKE '%$buscar%'";

                    break;

                case 'liceN':
                    $selectQuery .= " AND l.nombre_lice LIKE '%$buscar%'";
                    break;
                case 'titulo':
                    $selectQuery .= " AND pd.titulo LIKE '%$buscar%'";
                    break;
                case 'instancia':
                    $selectQuery .= " AND ei.instancia LIKE '%$buscar%'";
                    break;
}
    }


    $result = \Incos\Models\DatabaseModel::query($con, $selectQuery);
    while ($row = \Incos\Models\DatabaseModel::fetch_assoc($result)) {
    
require MVC_ROOT . '/app/views/admRepo/proyectoLista/006.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/admRepo/proyectoLista/013.php';
} 
require MVC_ROOT . '/app/views/admRepo/proyectoLista/016.php';
include(MVC_ROOT . '/admRepo/partir/conexion.php');
                $cons = \Incos\Models\ProyectoModel::statement030(get_defined_vars());
                $res = \Incos\Models\DatabaseModel::query($con, $cons);
                while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
                    $selected = ($reg['id'] == $row['etapas_instancia_id']) ? 'selected' : '';
                
require MVC_ROOT . '/app/views/admRepo/proyectoLista/029.php';
}
                
require MVC_ROOT . '/app/views/admRepo/proyectoLista/036.php';
// Añadir el código para mostrar el botón de eliminación si la instancia es "Defensa"
            if ($row['instancia'] === 'Defensa') {
            
require MVC_ROOT . '/app/views/admRepo/proyectoLista/041.php';
}
            
require MVC_ROOT . '/app/views/admRepo/proyectoLista/046.php';

            // Añadir el código para mostrar el botón de eliminación si la instancia es "Defensa"
            if ($row['instancia'] === 'Repositorio') {
            
require MVC_ROOT . '/app/views/admRepo/proyectoLista/047.php';
}
            
require MVC_ROOT . '/app/views/admRepo/proyectoLista/050.php';
} 
require MVC_ROOT . '/app/views/admRepo/proyectoLista/059.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

