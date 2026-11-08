<?php

include("../partir/check.php");
require('tcpdf');
include("../partir/conexion.php");


$directorio = "../../storage_Archivos/";
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
            $consulta = "INSERT INTO archivosinsta (titulo, ruta, tipo_documento, estudiante) 
            VALUES ('$titulo', '$directorio', '$nombreArchivo', '$estudiante')";

            $resultado = mysqli_query($con, $consulta);

            if ($resultado) {
                $ultimo_id = mysqli_insert_id($con);

                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }

                // Crear instancia de TCPDF
                $pdf = new PDF();

                // Establecer protección contra copia e impresión
                $pdf->SetProtection(array('print', 'copy'), '', null, 0, null);

                // Guardar el PDF en el directorio
                $nombreArchivoPDF = $directorio . $ultimo_id . ".pdf";
                $pdf->Output($nombreArchivoPDF, 'F');

                // Establecer permisos de solo lectura
                chmod($nombreArchivoPDF, 0444);

                echo "¡Archivo(s) subido(s) con éxito!";
                header("Location: archivosLista.php?menu=300");
            } else {
                echo "ERROR EN LA CONSULTA: " . mysqli_error($con);
            }
        } else {
            echo "El archivo seleccionado no es un PDF válido.";
        }
    }
} else {
    echo "Ningún archivo seleccionado para subir.";
}

// Redirigir a proyectoFormulario.php después de completar la operación
header("Location: proyectoFormulario.php");
?>
