<?php
/* Controlador compatible con la URL original: admRepo/proyectoFiltrar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['carrrera_id'])) {
    $carreraId = $_POST['carrrera_id'];

    // Consulta para obtener licenciados por carrera
    $consultaLicenciados = \Incos\Models\ProyectoModel::statement018(get_defined_vars());
    $resultadoLicenciados = \Incos\Models\DatabaseModel::query($con, $consultaLicenciados);

    $licenciados = array();

    while ($row = \Incos\Models\DatabaseModel::fetch_assoc($resultadoLicenciados)) {
        $licenciados[] = array('id' => $row['id'], 'nombre_lice' => $row['nombre_lice'], 'carrera' => obtenerNombreCarrera($con, $row['carrrera_id']));
    }

    require MVC_ROOT . '/app/views/admRepo/proyectoFiltrar/001.php';

} else {
    require MVC_ROOT . '/app/views/admRepo/proyectoFiltrar/002.php';

}

function obtenerNombreCarrera($conexion, $carreraId) {
    $consultaCarrera = \Incos\Models\ProyectoModel::statement019(get_defined_vars());
    $resultadoCarrera = \Incos\Models\DatabaseModel::query($conexion, $consultaCarrera);

    if ($row = \Incos\Models\DatabaseModel::fetch_assoc($resultadoCarrera)) {
        return $row['nombre_carrera'];
    }

    return '';
}

