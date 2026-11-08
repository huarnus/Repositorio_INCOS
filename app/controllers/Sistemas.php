<?php
/* Controlador compatible con la URL original: Sistemas.php */
 include(MVC_ROOT . '/partir/arriba.php');
require MVC_ROOT . '/app/views/Sistemas/001.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement025(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Sistemas/002.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/022.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/023.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/024.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/033.php';

}

require MVC_ROOT . '/app/views/Sistemas/034.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement026(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Sistemas/035.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/056.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/057.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/058.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/068.php';

}

require MVC_ROOT . '/app/views/Sistemas/069.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement027(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Sistemas/070.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/090.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/091.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/092.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/101.php';

}

require MVC_ROOT . '/app/views/Sistemas/102.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement028(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Sistemas/103.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/124.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/125.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/126.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/136.php';

}

require MVC_ROOT . '/app/views/Sistemas/137.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement029(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Sistemas/138.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/158.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/159.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/160.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/169.php';

}

require MVC_ROOT . '/app/views/Sistemas/170.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement030(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Sistemas/171.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/192.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/193.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/194.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/204.php';

}

require MVC_ROOT . '/app/views/Sistemas/205.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement031(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/Sistemas/206.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/226.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/227.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/228.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/237.php';

}

require MVC_ROOT . '/app/views/Sistemas/238.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement032(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/Sistemas/239.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/Sistemas/260.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/Sistemas/261.php';

        }
        require MVC_ROOT . '/app/views/Sistemas/262.php';
}
} else {
    require MVC_ROOT . '/app/views/Sistemas/272.php';

}

require MVC_ROOT . '/app/views/Sistemas/273.php';
 include(MVC_ROOT . '/partir/abajo.php');
