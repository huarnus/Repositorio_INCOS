<?php
/* Controlador compatible con la URL original: admRepo/usuariosAdmi.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');


require MVC_ROOT . '/app/views/admRepo/usuariosAdmi/001.php';

        include(MVC_ROOT . '/admRepo/partir/conexion.php');
        // $consulta = "SELECT * FROM usuario " ;

        $consulta=\Incos\Models\UsuarioModel::statement011(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
        while ($tupla = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/usuariosAdmi/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/usuariosAdmi/013.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

require MVC_ROOT . '/app/views/admRepo/usuariosAdmi/014.php';
