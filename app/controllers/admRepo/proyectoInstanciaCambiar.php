<?php
/* Controlador compatible con la URL original: admRepo/proyectoInstanciaCambiar.php */

// proyectoInstanciaCambiar.php

if (isset($_GET['id']) && isset($_GET['instancia'])) {
    $id_Pro = $_GET['id'];
    $nuevaInstancia = $_GET['instancia'];

    include(MVC_ROOT . '/admRepo/partir/conexion.php');

    // Validar y escapar datos de entrada
    $id_Pro = \Incos\Models\DatabaseModel::real_escape_string($con, $id_Pro);
    $nuevaInstancia = \Incos\Models\DatabaseModel::real_escape_string($con, $nuevaInstancia);

    // Iniciar una transacción para asegurar que la operación se complete con éxito
    \Incos\Models\DatabaseModel::begin_transaction($con);

    // Actualizar la instancia en la base de datos
    $updateQuery = \Incos\Models\ProyectoModel::statement027(get_defined_vars());
    $result = \Incos\Models\DatabaseModel::query($con, $updateQuery);

    if ($result) {
        // Commit la transacción
        \Incos\Models\DatabaseModel::commit($con);

        // Obtener las opciones actualizadas del menú desplegable
        $selectOptions = obtenerOpcionesSelect($con, $id_Pro, $nuevaInstancia);
    
        // Devolver el array asociativo del select y el nombre del estudiante
        $responseArray = array('options' => $selectOptions);
        
        // Devolver el JSON
        require MVC_ROOT . '/app/views/admRepo/proyectoInstanciaCambiar/001.php';

    } else {
        \Incos\Models\DatabaseModel::rollback($con);
        require MVC_ROOT . '/app/views/admRepo/proyectoInstanciaCambiar/002.php';

    }

    \Incos\Models\DatabaseModel::close($con);
} else {
    require MVC_ROOT . '/app/views/admRepo/proyectoInstanciaCambiar/003.php';

}

function obtenerOpcionesSelect($con, $id_Pro, $nuevaInstancia) {
    // Obtener las opciones actualizadas del menú desplegable
    $consultaInstancia = \Incos\Models\ProyectoModel::statement028(get_defined_vars());
    $resultadoInstancia = \Incos\Models\DatabaseModel::query($con, $consultaInstancia);

    $selectOptions = '';
    while ($rowInstancia = \Incos\Models\DatabaseModel::fetch_assoc($resultadoInstancia)) {
        $selected = ($rowInstancia['id'] == $nuevaInstancia) ? 'selected' : '';
        $selectOptions .= '<option value="' . $rowInstancia['id'] . '" ' . $selected . '>' . $rowInstancia['instancia'] . '</option>';
    }

    return $selectOptions;
}



