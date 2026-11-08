<?php
/* Controlador compatible con la URL original: partir/banner.php */
require MVC_ROOT . '/app/views/partir/banner/001.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\PublicoModel::statement045(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/partir/banner/002.php';
}
            
require MVC_ROOT . '/app/views/partir/banner/007.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\PublicoModel::statement046(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/partir/banner/008.php';
}
            
require MVC_ROOT . '/app/views/partir/banner/013.php';
