<?php
/* Controlador compatible con la URL original: admRepo/archivosGrabar4.php */

// include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
require_once(MVC_ROOT . '/admRepo/reporte/fpdf.php');
require_once(MVC_ROOT . '/admRepo/reporte/Fpdi.php');

$directorio = "../storage_Archivos/";
$estudiante = $_POST['estudiante'];

// Verificar si se subió algún archivo
if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name'][0])) {
    $archivosSubidos = $_FILES['pdf'];
    
    // Recorremos los archivos subidos
    for ($i = 0; $i < count($archivosSubidos['name']); $i++) {
        // Obtener el título del archivo sin dividirlo en letras
        $titulo = $_POST['titulo'][$i];
        $nombreArchivo = $archivosSubidos['name'][$i];
        $guardado = $archivosSubidos['tmp_name'][$i];
        
        // Obtener la extensión del archivo
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        
        // Verificar si la extensión es PDF
        if (strtolower($extension) === "pdf") {
            $consulta = \Incos\Models\ArchivoModel::statement004(get_defined_vars());
            
            $resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
            
            if ($resultado) {
                $ultimo_id = \Incos\Models\DatabaseModel::insert_id($con);
        
                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }

                // Crear una instancia de FPDI
                $pdf = new FPDI();
                
                // Establecer restricciones de copia en el PDF
                $pdf->SetProtection(array('copy'), '', '', 0, 0);
                
                // Agregar una página al PDF
                $pdf->AddPage();
                
                // Importar la página desde el archivo subido
                $pdf->setSourceFile($guardado);
                $tplIdx = $pdf->importPage(1);
                $pdf->useTemplate($tplIdx);

                // Guardar el PDF con restricciones en el directorio
                $pdf->Output($directorio . $ultimo_id . ".pdf", 'F');

                require MVC_ROOT . '/app/views/admRepo/archivosGrabar4/001.php';

                header("Location: archivosLista.php?menu=300");
            } else {
                require MVC_ROOT . '/app/views/admRepo/archivosGrabar4/002.php';

            }
        } else {
            require MVC_ROOT . '/app/views/admRepo/archivosGrabar4/003.php';

        }
    }
} else {
    require MVC_ROOT . '/app/views/admRepo/archivosGrabar4/004.php';

}

// Redirigir a proyectoFormulario.php después de completar la operación
header("Location: proyectoFormulario.php");

