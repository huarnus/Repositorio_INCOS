<?php
/* Controlador compatible con la URL original: admRepo/archivo_descargar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $consulta = \Incos\Models\ArchivoModel::statement001(get_defined_vars());
    $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

    if ($archivo = \Incos\Models\DatabaseModel::fetch_assoc($resultado)) {
        $archivoRuta = $archivo['ruta'] . $archivo['id'] . ".pdf";
        
        if (file_exists($archivoRuta)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $archivo['tipo_documento'] . '"');
            readfile($archivoRuta);
        } else {
            require MVC_ROOT . '/app/views/admRepo/archivo_descargar/001.php';

        }
    } else {
        require MVC_ROOT . '/app/views/admRepo/archivo_descargar/002.php';

    }
} else {
    require MVC_ROOT . '/app/views/admRepo/archivo_descargar/003.php';

}

