<?php
/* Controlador compatible con la URL original: Contabilidad.php */
require MVC_ROOT . '/app/views/Contabilidad/001.php';
 include(MVC_ROOT . '/partir/arriba.php');
require MVC_ROOT . '/app/views/Contabilidad/002.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement009(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Contabilidad/003.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/023.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/024.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/025.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/034.php';

}

require MVC_ROOT . '/app/views/Contabilidad/035.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement010(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Contabilidad/036.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/057.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/058.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/059.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/069.php';

}

require MVC_ROOT . '/app/views/Contabilidad/070.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement011(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Contabilidad/071.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/091.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/092.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/093.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/102.php';

}

require MVC_ROOT . '/app/views/Contabilidad/103.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement012(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Contabilidad/104.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/125.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/126.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/127.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/137.php';

}

require MVC_ROOT . '/app/views/Contabilidad/138.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement013(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Contabilidad/139.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/159.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/160.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/161.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/170.php';

}

require MVC_ROOT . '/app/views/Contabilidad/171.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement014(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Contabilidad/172.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/193.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/194.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/195.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/205.php';

}

require MVC_ROOT . '/app/views/Contabilidad/206.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement015(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Contabilidad/207.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/227.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/228.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/229.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/238.php';

}

require MVC_ROOT . '/app/views/Contabilidad/239.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement016(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Contabilidad/240.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Contabilidad/261.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Contabilidad/262.php';

        }
        require MVC_ROOT . '/app/views/Contabilidad/263.php';
}
} else {
    require MVC_ROOT . '/app/views/Contabilidad/273.php';

}

require MVC_ROOT . '/app/views/Contabilidad/274.php';
 include(MVC_ROOT . '/partir/abajo.php');
