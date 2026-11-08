<?php
/* Controlador compatible con la URL original: ComercioInternacional.php */
require MVC_ROOT . '/app/views/ComercioInternacional/001.php';
 include(MVC_ROOT . '/partir/arriba.php');
require MVC_ROOT . '/app/views/ComercioInternacional/002.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement001(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/ComercioInternacional/003.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/023.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/024.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/025.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/034.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/035.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement002(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/ComercioInternacional/036.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/057.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/058.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/059.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/069.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/070.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement003(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/ComercioInternacional/071.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/091.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/092.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/093.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/102.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/103.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement004(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/ComercioInternacional/104.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/125.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/126.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/127.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/137.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/138.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement005(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/ComercioInternacional/139.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/159.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/160.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/161.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/170.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/171.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement006(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/ComercioInternacional/172.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/193.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/194.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/195.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/205.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/206.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement007(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
 
      require MVC_ROOT . '/app/views/ComercioInternacional/207.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/227.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/228.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/229.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/238.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/239.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement008(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      require MVC_ROOT . '/app/views/ComercioInternacional/240.php';
$descripcion_corta = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];
        require MVC_ROOT . '/app/views/ComercioInternacional/261.php';

        if (strlen($row['descripcion']) > 100) {
        require MVC_ROOT . '/app/views/ComercioInternacional/262.php';

        }
        require MVC_ROOT . '/app/views/ComercioInternacional/263.php';
}
} else {
    require MVC_ROOT . '/app/views/ComercioInternacional/273.php';

}

require MVC_ROOT . '/app/views/ComercioInternacional/274.php';
 include(MVC_ROOT . '/partir/abajo.php');
