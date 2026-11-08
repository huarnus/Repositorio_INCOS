<?php
/* Controlador compatible con la URL original: Secretariado.php */
require MVC_ROOT . '/app/views/Secretariado/001.php';
 include(MVC_ROOT . '/partir/arriba.php');
require MVC_ROOT . '/app/views/Secretariado/002.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement017(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Secretariado/003.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/023.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/024.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/025.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/034.php';

}

require MVC_ROOT . '/app/views/Secretariado/035.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement018(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Secretariado/036.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/057.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/058.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/059.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/069.php';

}

require MVC_ROOT . '/app/views/Secretariado/070.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement019(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Secretariado/071.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/091.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/092.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/093.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/102.php';

}

require MVC_ROOT . '/app/views/Secretariado/103.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement020(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Secretariado/104.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/125.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/126.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/127.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/137.php';

}

require MVC_ROOT . '/app/views/Secretariado/138.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement021(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Secretariado/139.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/159.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/160.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/161.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/170.php';

}

require MVC_ROOT . '/app/views/Secretariado/171.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement022(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Secretariado/172.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/193.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/194.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/195.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/205.php';

}

require MVC_ROOT . '/app/views/Secretariado/206.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement023(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Secretariado/207.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/227.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/228.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/229.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/238.php';

}

require MVC_ROOT . '/app/views/Secretariado/239.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement024(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Secretariado/240.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Secretariado/261.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Secretariado/262.php';

        }
        require MVC_ROOT . '/app/views/Secretariado/263.php';
}
} else {
    require MVC_ROOT . '/app/views/Secretariado/273.php';

}

require MVC_ROOT . '/app/views/Secretariado/274.php';
 include(MVC_ROOT . '/partir/abajo.php');
