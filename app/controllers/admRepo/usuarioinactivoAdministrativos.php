<?php
/* Controlador compatible con la URL original: admRepo/usuarioinactivoAdministrativos.php */

include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/usuarioinactivoAdministrativos/001.php';

        include(MVC_ROOT . '/admRepo/partir/conexion.php');
        // $consulta = "SELECT * FROM usuarios WHERE estado = 'Inactivo' ";

        $consulta=\Incos\Models\UsuarioModel::statement008(get_defined_vars());

        $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
        while ($tupla = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/usuarioinactivoAdministrativos/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/usuarioinactivoAdministrativos/019.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

