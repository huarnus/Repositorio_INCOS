<?php
/* Controlador compatible con la URL original: admRepo/proyec2022Grabar.php */

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$directorio = "../storage_Proyectos2022/";
$titulo = strtoupper($_POST['titulo']); // Convertir todo el título a mayúsculas
$descripcion = $_POST['descripcion'];
$autor = ucwords(strtolower($_POST['autor']));// Convertir la primera letra de cada palabra a mayúscula
$tutor = ucwords($_POST['licenciados_id']);
$gestion = $_POST['gestion'];
$fecha_publicacion = $_POST['fecha_publicacion'];
$carrrera_id = $_POST['carrrera_id'];
$modalidad_id = $_POST['modalidad_id'];


// Obtener el nombre del licenciado
$nombreLiceQuery = \Incos\Models\ProyectoModel::statement001(get_defined_vars());
$resultadoNombreLice = \Incos\Models\DatabaseModel::query($con, $nombreLiceQuery);
$filaNombreLice = \Incos\Models\DatabaseModel::fetch_assoc($resultadoNombreLice);
$nombreLice = $filaNombreLice['nombre_lice'];

// Convertir la fecha al formato 'Y-m-d'
$fecha_entrega_formato_correcto = DateTime::createFromFormat('d-m-Y', $fecha_publicacion)->format('Y-m-d');

// Verificar si se subió algún archivo
if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name'][0])) {
    $archivosSubidos = $_FILES['pdf'];
    
    // Recorremos los archivos subidos
    for ($i = 0; $i < count($archivosSubidos['name']); $i++) {
        $nombreArchivo = $archivosSubidos['name'][$i];
        $guardado = $archivosSubidos['tmp_name'][$i];
        
        // Obtener la extensión del archivo
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        
        // Verificar si la extensión es PDF
        if (strtolower($extension) === "pdf") {
            $consulta = \Incos\Models\ProyectoModel::statement002(get_defined_vars());
            
            $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
            
            if ($resultado) {
                $ultimo_id = \Incos\Models\DatabaseModel::insert_id($con);
        
                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }
        
                if (move_uploaded_file($guardado, $directorio . $ultimo_id . ".pdf")) {
                    chmod($directorio . $ultimo_id . ".pdf", 0444);
                    require MVC_ROOT . '/app/views/admRepo/proyec2022Grabar/001.php';

                    header("Location: archivosLista.php?menu=300");
                } else {
                    require MVC_ROOT . '/app/views/admRepo/proyec2022Grabar/002.php';

                }
            } else {
                require MVC_ROOT . '/app/views/admRepo/proyec2022Grabar/003.php';

            }
        } else {
            require MVC_ROOT . '/app/views/admRepo/proyec2022Grabar/004.php';

        }
    }
} else {
    require MVC_ROOT . '/app/views/admRepo/proyec2022Grabar/005.php';

}

// Redirigir a proyec2022Registro.php después de completar la operación
header("Location: proyec2022Registro.php?sw=1");

