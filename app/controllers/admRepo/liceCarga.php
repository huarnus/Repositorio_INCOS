<?php
/* Controlador compatible con la URL original: admRepo/liceCarga.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

// Establecer el número de resultados por página
$resultados_por_pagina = 10;

// Determinar la página actual
if (isset($_GET['page'])) {
    $pagina_actual = $_GET['page'];
} else {
    $pagina_actual = 1;
}

// Calcular el inicio del conjunto de resultados para la página actual
$inicio = ($pagina_actual - 1) * $resultados_por_pagina;

// Consulta para obtener los resultados de la página actual
$consulta = \Incos\Models\TutorModel::statement001(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

// Generar la tabla HTML

require MVC_ROOT . '/app/views/admRepo/liceCarga/001.php';

    while ($dato = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
    
require MVC_ROOT . '/app/views/admRepo/liceCarga/002.php';
}
    
require MVC_ROOT . '/app/views/admRepo/liceCarga/011.php';
