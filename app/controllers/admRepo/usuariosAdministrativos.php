<?php
/* Controlador compatible con la URL original: admRepo/usuariosAdministrativos.php */

include(MVC_ROOT . '/admRepo/partir/arriba.php');

require MVC_ROOT . '/app/views/admRepo/usuariosAdministrativos/001.php';

        include(MVC_ROOT . '/admRepo/partir/conexion.php');
        // $consulta = "SELECT * FROM usuarios WHERE estado = 'Activo' ";

        $consulta=\Incos\Models\UsuarioModel::statement012(get_defined_vars());
       

        $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
        while ($tupla = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/usuariosAdministrativos/002.php';
}
        
require MVC_ROOT . '/app/views/admRepo/usuariosAdministrativos/019.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

