<?php
/* Controlador compatible con la URL original: listaArchivos.php */
 include(MVC_ROOT . '/partir/arriba.php');
require MVC_ROOT . '/app/views/listaArchivos/001.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement037(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      
      require MVC_ROOT . '/app/views/listaArchivos/002.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/022.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/025.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/028.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/036.php';

}

require MVC_ROOT . '/app/views/listaArchivos/037.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement038(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {

      require MVC_ROOT . '/app/views/listaArchivos/038.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/058.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/061.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/064.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/072.php';

}

require MVC_ROOT . '/app/views/listaArchivos/073.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement039(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      
      require MVC_ROOT . '/app/views/listaArchivos/074.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/094.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/097.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/100.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/108.php';

}

require MVC_ROOT . '/app/views/listaArchivos/109.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement040(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
   
      require MVC_ROOT . '/app/views/listaArchivos/110.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/130.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/133.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/136.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/144.php';

}

require MVC_ROOT . '/app/views/listaArchivos/145.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement041(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
     
      require MVC_ROOT . '/app/views/listaArchivos/146.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/166.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/169.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/172.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/180.php';

}

require MVC_ROOT . '/app/views/listaArchivos/181.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement042(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
  
      require MVC_ROOT . '/app/views/listaArchivos/182.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/202.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/205.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/208.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/216.php';

}

require MVC_ROOT . '/app/views/listaArchivos/217.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement043(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
     
      require MVC_ROOT . '/app/views/listaArchivos/218.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/238.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/241.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/244.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/252.php';

}

require MVC_ROOT . '/app/views/listaArchivos/253.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');
$sql =  \Incos\Models\PublicoModel::statement044(get_defined_vars());

$resultado = \Incos\Models\DatabaseModel::query($con,$sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
     
      require MVC_ROOT . '/app/views/listaArchivos/254.php';
$descripcion = strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion'];

require MVC_ROOT . '/app/views/listaArchivos/274.php';
if (strlen($row['descripcion']) > 100) { 
require MVC_ROOT . '/app/views/listaArchivos/277.php';
} 
require MVC_ROOT . '/app/views/listaArchivos/280.php';
}
} else {
    require MVC_ROOT . '/app/views/listaArchivos/288.php';

}

require MVC_ROOT . '/app/views/listaArchivos/289.php';
 include(MVC_ROOT . '/partir/abajo.php');
