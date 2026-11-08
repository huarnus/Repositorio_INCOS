<?php
/* Controlador compatible con la URL original: admRepo/proyectoLista2023.php */

include(MVC_ROOT . '/admRepo/partir/check.php');

include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/001.php';
include(MVC_ROOT . '/admRepo/partir/conexion.php');
    $sql = \Incos\Models\ProyectoModel::statement032(get_defined_vars()); 

 if(isset($_GET['buscar']) && !empty($_GET['buscar']) && isset($_GET['filtro']) && !empty($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    $buscar = $_GET['buscar'];

    switch($filtro) {
        case 'nombre_carrera':
            $sql .= " AND c.nombre_carrera LIKE '%$buscar%'";
            break;
       
        case 'autor':
            $sql .= " AND pd.autor LIKE '%$buscar%'";
            break;
   
        case 'nombreM':
            $sql .= " AND m.nombreM LIKE '%$buscar%'";

            break;

        case 'tutor':
            $sql .= " AND pd.tutor LIKE '%$buscar%'";
            break;
        case 'titulo':
            $sql .= " AND pd.titulo LIKE '%$buscar%'";
            break;
        case 'estado':
            $sql .= " AND pd.estado LIKE '%$buscar%'";
            break;
}
}
    $resultado =\Incos\Models\DatabaseModel::query($con, $sql);
        while ($row = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
           
require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/006.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/017.php';
} 
require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/020.php';
$rutaArchivo = $row['ruta'] ;
            require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/033.php';
}
  
    
require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/036.php';

// Cierra la conexión a la base de datos
\Incos\Models\DatabaseModel::close($con);
include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/proyectoLista2023/037.php';
