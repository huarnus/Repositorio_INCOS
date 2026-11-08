<?php
/* Controlador compatible con la URL original: admRepo/proyectoFormulario.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

// Obtener el nombre de usuari del usuari actual
$nombreUsuario = $usuarioC['nombre'];

// Consulta para obtener el id y el titulo de la tabla archivosinsta donde el nombr de estudiante es igual al nombr de usuari
$consultaArchivosInsta = \Incos\Models\ProyectoModel::statement020(get_defined_vars());
$resultadoArchivosInsta = \Incos\Models\DatabaseModel::query($con, $consultaArchivosInsta);


require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/001.php';
 if ($usuarioC['cargo_id'] == "Egresado" || $usuarioC['cargo_id'] == "Estudiante"|| $usuarioC['cargo_id'] == "Directora") { 
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/002.php';

    if ($resultadoArchivosInsta && \Incos\Models\DatabaseModel::num_rows($resultadoArchivosInsta) > 0) {
        $fila = \Incos\Models\DatabaseModel::fetch_assoc($resultadoArchivosInsta);
        $idArchivoInsta = $fila['id'];
        $tituloArchivoInsta = $fila['titulo'];
        
    } else {
        require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/003.php';

    }
    
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/004.php';
include(MVC_ROOT . '/admRepo/partir/conexion.php');
    $cons = \Incos\Models\ProyectoModel::statement021(get_defined_vars());
    $res = \Incos\Models\DatabaseModel::query($con, $cons);
    while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
    
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/013.php';
}
    
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/018.php';

    include(MVC_ROOT . '/admRepo/partir/conexion.php');
    $cons = \Incos\Models\ProyectoModel::statement022(get_defined_vars());
    $res = \Incos\Models\DatabaseModel::query($con, $cons);
    while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
    
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/019.php';
}
    
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/026.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\ProyectoModel::statement023(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/027.php';
}
            
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/032.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\ProyectoModel::statement024(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/033.php';
}
            
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/038.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\ProyectoModel::statement025(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/039.php';
}  
            
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/044.php';
 date_default_timezone_set('America/La_Paz');
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/045.php';
} else { 
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/048.php';
 } 
require MVC_ROOT . '/app/views/admRepo/proyectoFormulario/049.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

