<?php
/* Controlador compatible con la URL original: admRepo/usuariocrear.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/usuariocrear/001.php';

        include(MVC_ROOT . '/admRepo/partir/conexion.php');
        $cons = \Incos\Models\UsuarioModel::statement005(get_defined_vars());
        $res = \Incos\Models\DatabaseModel::query($con, $cons);
        while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
        
require MVC_ROOT . '/app/views/admRepo/usuariocrear/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/usuariocrear/007.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

