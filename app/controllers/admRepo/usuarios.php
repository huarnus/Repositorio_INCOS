<?php
/* Controlador compatible con la URL original: admRepo/usuarios.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');


require MVC_ROOT . '/app/views/admRepo/usuarios/001.php';
include(MVC_ROOT . '/admRepo/partir/conexion.php');
        // $consulta = "SELECT * FROM usuario " ;

        $consulta=\Incos\Models\UsuarioModel::statement010(get_defined_vars());

if(isset($_GET['buscar']) && !empty($_GET['buscar']) && isset($_GET['filtro']) && !empty($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    $buscar = $_GET['buscar'];

    switch($filtro) {
        case 'nombreC':
            $consulta .= " AND c.nombre LIKE '%$buscar%'";
            break;
       
        case 'nombre':
            $consulta .= " AND u.nombre LIKE '%$buscar%'";
            break;
   
        case 'carnet':
            $consulta .= " AND e.carnet LIKE '%$buscar%'";
            break;
    }
}

        $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
        while ($tupla = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/usuarios/006.php';
}
        
require MVC_ROOT . '/app/views/admRepo/usuarios/031.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/usuarios/032.php';
