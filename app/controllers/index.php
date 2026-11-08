<?php
/* Controlador compatible con la URL original: index.php */
 include(MVC_ROOT . '/partir/arriba.php');
 include(MVC_ROOT . '/partir/banner.php');


require MVC_ROOT . '/app/views/index/001.php';

            include(MVC_ROOT . '/admRepo/partir/conexion.php');
            $cons = \Incos\Models\PublicoModel::statement033(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/index/002.php';
}
            
require MVC_ROOT . '/app/views/index/007.php';

            $cons = \Incos\Models\PublicoModel::statement034(get_defined_vars());
            $res = \Incos\Models\DatabaseModel::query($con, $cons);
            while ($reg = \Incos\Models\DatabaseModel::fetch_array($res)) {
            
require MVC_ROOT . '/app/views/index/008.php';
}
            
require MVC_ROOT . '/app/views/index/013.php';

include(MVC_ROOT . '/admRepo/partir/conexion.php');


if(isset($_GET['carrrera_id']) || isset($_GET['modalidad_id']) || isset($_GET['query'])) {
  $carrrera_id = isset($_GET['carrrera_id']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['carrrera_id']) : null;
  $modalidad_id = isset($_GET['modalidad_id']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['modalidad_id']) : null;
  $query = isset($_GET['query']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['query']) : null;

  // Consulta para obtener documentos con la carrera y/o modalidad seleccionadas y coincidan con el término de búsqueda
  $cons = \Incos\Models\PublicoModel::statement035(get_defined_vars());

  if($carrrera_id !== null) {
      $cons .= " AND proyectos_repositorio.carrrera_id = $carrrera_id";
  }

  if($modalidad_id !== null) {
      $cons .= " AND proyectos_repositorio.modalidad_id = $modalidad_id";
  }

  if($query !== null) {
      $cons .= " AND (proyectos_repositorio.titulo LIKE '%$query%'
                 OR proyectos_repositorio.autor LIKE '%$query%'
                 OR proyectos_repositorio.tutor LIKE '%$query%')";
  }

    $res = \Incos\Models\DatabaseModel::query($con, $cons);

// Mostrar los resultados
if(\Incos\Models\DatabaseModel::num_rows($res) > 0) {
  require MVC_ROOT . '/app/views/index/014.php';

  
  while ($row = \Incos\Models\DatabaseModel::fetch_array($res)) {
    require MVC_ROOT . '/app/views/index/015.php';
 // Línea divisoria
      require MVC_ROOT . '/app/views/index/016.php';
 // Añadido un contenedor específico para el proyecto
      // Lado izquierdo: iframe y enlace PDF
      require MVC_ROOT . '/app/views/index/017.php';
// Cierre de col-md-6 para el lado izquierdo

      // Lado derecho: Detalles del proyecto
      require MVC_ROOT . '/app/views/index/025.php';
// Agregado "Proyecto: " para mayor claridad
      require MVC_ROOT . '/app/views/index/029.php';
$descripcion_corta = strlen($row['descripcion']) > 200 ? substr($row['descripcion'], 0, 200) . '...' : $row['descripcion'];
     
      require MVC_ROOT . '/app/views/index/031.php';

      if (strlen($row['descripcion']) > 200) {
        require MVC_ROOT . '/app/views/index/032.php';

      }
      require MVC_ROOT . '/app/views/index/033.php';
// Sección de Autor
      require MVC_ROOT . '/app/views/index/036.php';
// Sección de Carrera
      require MVC_ROOT . '/app/views/index/038.php';
// Cierre de div.card-body
      require MVC_ROOT . '/app/views/index/042.php';
 // Cierre de col-md-6 para el lado derecho
      require MVC_ROOT . '/app/views/index/043.php';
 // Cierre de div.row
      
  }

  require MVC_ROOT . '/app/views/index/044.php';
 // Cierre de col-lg-12
  
} else {
  require MVC_ROOT . '/app/views/index/045.php';

}
require MVC_ROOT . '/app/views/index/046.php';
 // Línea divisoria
}

if(isset($_GET['carrrera_id']) || isset($_GET['modalidad_id']) || isset($_GET['query'])) {
  $carrrera_id = isset($_GET['carrrera_id']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['carrrera_id']) : null;
  $modalidad_id = isset($_GET['modalidad_id']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['modalidad_id']) : null;
  $query = isset($_GET['query']) ? \Incos\Models\DatabaseModel::real_escape_string($con, $_GET['query']) : null;

  // Consulta para obtener documentos con la carrera y/o modalidad seleccionadas y coincidan con el término de búsqueda
  $cons = \Incos\Models\PublicoModel::statement036(get_defined_vars());

  if($carrrera_id !== null) {
      $cons .= " AND pro_repositorio22.carrrera_id = $carrrera_id";
  }

  if($modalidad_id !== null) {
      $cons .= " AND pro_repositorio22.modalidad_id = $modalidad_id";
  }

  if($query !== null) {
      $cons .= " AND (pro_repositorio22.titulo LIKE '%$query%'
                 OR pro_repositorio22.autor LIKE '%$query%'
                 OR pro_repositorio22.tutor LIKE '%$query%')";
  }

    $res = \Incos\Models\DatabaseModel::query($con, $cons);

// Mostrar los resultados
if(\Incos\Models\DatabaseModel::num_rows($res) > 0) {
  require MVC_ROOT . '/app/views/index/047.php';

  
  while ($row = \Incos\Models\DatabaseModel::fetch_array($res)) {
    require MVC_ROOT . '/app/views/index/048.php';
 // Línea divisoria
      require MVC_ROOT . '/app/views/index/049.php';
 // Añadido un contenedor específico para el proyecto
      // Lado izquierdo: iframe y enlace PDF
      require MVC_ROOT . '/app/views/index/050.php';
// Cierre de col-md-6 para el lado izquierdo

      // Lado derecho: Detalles del proyecto
      require MVC_ROOT . '/app/views/index/058.php';
// Agregado "Proyecto: " para mayor claridad
      require MVC_ROOT . '/app/views/index/062.php';
$descripcion_corta = strlen($row['descripcion']) > 200 ? substr($row['descripcion'], 0, 200) . '...' : $row['descripcion'];
     
      require MVC_ROOT . '/app/views/index/064.php';

      if (strlen($row['descripcion']) > 200) {
        require MVC_ROOT . '/app/views/index/065.php';

      }
      require MVC_ROOT . '/app/views/index/066.php';
// Sección de Autor
      require MVC_ROOT . '/app/views/index/069.php';
// Sección de Carrera
      require MVC_ROOT . '/app/views/index/071.php';
// Cierre de div.card-body
      require MVC_ROOT . '/app/views/index/075.php';
 // Cierre de col-md-6 para el lado derecho
      require MVC_ROOT . '/app/views/index/076.php';
 // Cierre de div.row
      
  }

  require MVC_ROOT . '/app/views/index/077.php';
 // Cierre de col-lg-12
  
} else {
  require MVC_ROOT . '/app/views/index/078.php';

}
require MVC_ROOT . '/app/views/index/079.php';
 // Línea divisoria
}


require MVC_ROOT . '/app/views/index/080.php';
 include(MVC_ROOT . '/partir/abajo.php');

