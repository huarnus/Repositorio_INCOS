<?php
/* Controlador compatible con la URL original: admRepo/liceLista.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

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

if (isset($_GET['sw'])) {
    $sw = $_GET['sw'];
} else {
    $sw = 0;
}

require MVC_ROOT . '/app/views/admRepo/liceLista/001.php';

if ($sw == 1) {
    require MVC_ROOT . '/app/views/admRepo/liceLista/002.php';

}
if ($sw == 2) {
    require MVC_ROOT . '/app/views/admRepo/liceLista/003.php';

}
if ($sw == 3) {
    require MVC_ROOT . '/app/views/admRepo/liceLista/004.php';

}

require MVC_ROOT . '/app/views/admRepo/liceLista/005.php';

    $total_resultados = \Incos\Models\DatabaseModel::num_rows(\Incos\Models\DatabaseModel::query($con, \Incos\Models\TutorModel::statement007(get_defined_vars())));
    $total_paginas = ceil($total_resultados / $resultados_por_pagina);

    for ($i = 1; $i <= $total_paginas; $i++) {
        require MVC_ROOT . '/app/views/admRepo/liceLista/006.php';

    }
    
require MVC_ROOT . '/app/views/admRepo/liceLista/007.php';

    // Consulta para obtener los resultados de la página actual
    $consulta = \Incos\Models\TutorModel::statement008(get_defined_vars());

    $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);

    // Generar la tabla HTML
    
require MVC_ROOT . '/app/views/admRepo/liceLista/008.php';

        while ($dato = \Incos\Models\DatabaseModel::fetch_array($resultado)) {
        
require MVC_ROOT . '/app/views/admRepo/liceLista/009.php';
}
        
require MVC_ROOT . '/app/views/admRepo/liceLista/018.php';

    $total_resultados = \Incos\Models\DatabaseModel::num_rows(\Incos\Models\DatabaseModel::query($con, \Incos\Models\TutorModel::statement009(get_defined_vars())));
    $total_paginas = ceil($total_resultados / $resultados_por_pagina);

    for ($i = 1; $i <= $total_paginas; $i++) {
        require MVC_ROOT . '/app/views/admRepo/liceLista/019.php';

    }
    
require MVC_ROOT . '/app/views/admRepo/liceLista/020.php';

include(MVC_ROOT . '/admRepo/partir/abajo.php');

