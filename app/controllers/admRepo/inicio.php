<?php
/* Controlador compatible con la URL original: admRepo/inicio.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

if (isset($_GET['sw'])) {
  # code...
  $sw=$_GET['sw'];
} else {
  $sw=0;
}


require MVC_ROOT . '/app/views/admRepo/inicio/001.php';


// Consulta para Estudiantes
$consultaEstudiantes = \Incos\Models\GestionModel::statement011(get_defined_vars());

$resultadoEstudiantes = \Incos\Models\DatabaseModel::query($con, $consultaEstudiantes);

// Consulta para Egresados
$consultaEgresados = \Incos\Models\GestionModel::statement012(get_defined_vars());

$resultadoEgresados = \Incos\Models\DatabaseModel::query($con, $consultaEgresados);

// Incluir el estilo CSS
require MVC_ROOT . '/app/views/admRepo/inicio/002.php';
if ($usuarioC['cargo_id']=="Directora" ||$usuarioC['cargo_id']=="Secretario" ){
  
  // Verificar y mostrar resultados para Estudiantes
if ($resultadoEstudiantes && \Incos\Models\DatabaseModel::num_rows($resultadoEstudiantes) > 0) {
  require MVC_ROOT . '/app/views/admRepo/inicio/004.php';

  while ($row = \Incos\Models\DatabaseModel::fetch_assoc($resultadoEstudiantes)) {
      $nombreCargo = $row['nombre_cargo'];
      $cantidadEstudiantes = $row['cantidad_estudiantes'];

      // Imprimir el resultado con el diseño de cuadro
      require MVC_ROOT . '/app/views/admRepo/inicio/005.php';

  }
  require MVC_ROOT . '/app/views/admRepo/inicio/006.php';

} else {
  require MVC_ROOT . '/app/views/admRepo/inicio/007.php';

}

// Verificar y mostrar resultados para Egresados
if ($resultadoEgresados && \Incos\Models\DatabaseModel::num_rows($resultadoEgresados) > 0) {
  require MVC_ROOT . '/app/views/admRepo/inicio/008.php';

  while ($row = \Incos\Models\DatabaseModel::fetch_assoc($resultadoEgresados)) {
      $nombreCargo = $row['nombre_cargo'];
      $cantidadEgresados = $row['cantidad_egresados'];

      // Imprimir el resultado con el diseño de cuadro
      require MVC_ROOT . '/app/views/admRepo/inicio/009.php';

  }
  require MVC_ROOT . '/app/views/admRepo/inicio/010.php';

} else {
  require MVC_ROOT . '/app/views/admRepo/inicio/011.php';

}
  
require MVC_ROOT . '/app/views/admRepo/inicio/012.php';
if(file_exists("storage_Archivos/".$usuarioC['id'].".pdf")){
                           
require MVC_ROOT . '/app/views/admRepo/inicio/015.php';
}
                        else{
                           
require MVC_ROOT . '/app/views/admRepo/inicio/020.php';

                        }
                        
require MVC_ROOT . '/app/views/admRepo/inicio/021.php';
}
  
require MVC_ROOT . '/app/views/admRepo/inicio/030.php';
  if ($usuarioC['cargo_id']=="Estudiante" ||$usuarioC['cargo_id']=="Egresado" ){
require MVC_ROOT . '/app/views/admRepo/inicio/031.php';
if($sw==1){
                          require MVC_ROOT . '/app/views/admRepo/inicio/036.php';

                      }
                      if($sw==2000){
                          require MVC_ROOT . '/app/views/admRepo/inicio/037.php';

                      }

                      
                  
require MVC_ROOT . '/app/views/admRepo/inicio/038.php';


// Obtener el nombre de usuario del estudiante que inició sesión
$nombreUsuario = $usuarioC['nombre'];

// Consultar los datos del estudiante y del proyecto en la tabla proyectos_defensa usando JOIN
$consultaProyectosDefensa = \Incos\Models\GestionModel::statement013(get_defined_vars());
$resultadoProyectosDefensa = \Incos\Models\DatabaseModel::query($con, $consultaProyectosDefensa);

// Consultar los datos del estudiante en la tabla archivosinsta
$consultaArchivosInsta = \Incos\Models\GestionModel::statement014(get_defined_vars());
$resultadoArchivosInsta = \Incos\Models\DatabaseModel::query($con, $consultaArchivosInsta);

// <!-- INICIO FORMUKARIO -->
// Mostrar los datos de proyectos_defensa
if ($resultadoProyectosDefensa && \Incos\Models\DatabaseModel::num_rows($resultadoProyectosDefensa) > 0) {
    while ($datosProyecto = \Incos\Models\DatabaseModel::fetch_assoc($resultadoProyectosDefensa)) {
        require MVC_ROOT . '/app/views/admRepo/inicio/039.php';
// Organizar datos en dos columnas
        require MVC_ROOT . '/app/views/admRepo/inicio/042.php';
// Agregar más campos aquí según sea necesario
        require MVC_ROOT . '/app/views/admRepo/inicio/048.php';
// Resto del código...
        require MVC_ROOT . '/app/views/admRepo/inicio/073.php';
}
} else {
    require MVC_ROOT . '/app/views/admRepo/inicio/075.php';

}

// Mostrar los datos de archivosinsta
if ($resultadoArchivosInsta && \Incos\Models\DatabaseModel::num_rows($resultadoArchivosInsta) > 0) {
  require MVC_ROOT . '/app/views/admRepo/inicio/076.php';
$contador = 0;

  // Iterar sobre los datos de ArchivosInsta
  while ($datosArchivo = \Incos\Models\DatabaseModel::fetch_assoc($resultadoArchivosInsta)) {
      // Mostrar solo si existe el campo 'tipo_documento'
      if (isset($datosArchivo['tipo_documento'])) {
          // Mostrar dos campos por fila
          if ($contador % 2 === 0) {
              require MVC_ROOT . '/app/views/admRepo/inicio/080.php';

          }

          require MVC_ROOT . '/app/views/admRepo/inicio/081.php';
// Agregar más campos aquí según sea necesario
          require MVC_ROOT . '/app/views/admRepo/inicio/083.php';


          // Cerrar la fila después de mostrar dos campos
          if ($contador % 2 === 1) {
              require MVC_ROOT . '/app/views/admRepo/inicio/084.php';

          }

          $contador++;
      }
  }

  // Si quedó un campo sin cerrar en la última fila
  if ($contador % 2 === 1) {
      require MVC_ROOT . '/app/views/admRepo/inicio/085.php';

  }

  // Resto del código...
  require MVC_ROOT . '/app/views/admRepo/inicio/086.php';
 // Cierre de proyecto-container
  require MVC_ROOT . '/app/views/admRepo/inicio/087.php';

} else {
  require MVC_ROOT . '/app/views/admRepo/inicio/088.php';

}


require MVC_ROOT . '/app/views/admRepo/inicio/089.php';
 }
require MVC_ROOT . '/app/views/admRepo/inicio/090.php';



include(MVC_ROOT . '/admRepo/partir/abajo.php');

