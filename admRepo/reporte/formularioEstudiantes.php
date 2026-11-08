<?php
include("../partir/check.php");
require('tcpdf.php');

class PDF extends TCPDF
{

    private function ofuscarTexto($texto)
    {
        // Implementa tu propia lógica de ofuscación aquí
        // Este es solo un ejemplo simple
        $ofuscado = strrev($texto); // Invierte la cadena

        return $ofuscado;
    }
    function Header()
    {
        if ($this->PageNo() == 1) {
            // Configuración del encabezado
            $this->Image('imagenes/logoincos.jpg', 10, 3, 10);
            $this->SetFont('helvetica', 'B', 14);
            $this->Cell(0, 10, 'Instituto Técnico Comercial Superior de la Nación', 0, 1, 'C');
            $this->Cell(0, 10, 'Tte. Armando de Palacios', 0, 1, 'C');
            $this->Cell(0, 10, 'INCOS La Paz', 0, 1, 'C');
            $this->Cell(0, 10, 'Formulario de Preinscripción para Defensa de Proyecto', 0, 1, 'C');
    
            // Línea debajo del título
            $this->SetDrawColor(0, 140, 0);
            $this->SetLineWidth(1);
            $this->Line(30, 28, 200, 28);
    
            // Salto de línea después del encabezado
            $this->Ln(20);
        }
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }

    function AddDescription($label, $value)
    {
        $this->SetFont('helvetica', '', 10);

        // Alineación de los campos
        $this->SetX(20);

        // Eliminar espacios en blanco al principio y al final del valor
        $value = trim($value);

        // Obtener el ancho de la etiqueta
        $labelWidth = $this->GetStringWidth($label);

        // Calcular el ancho total de la celda
        $cellWidth = $labelWidth + 5; // 6 unidades adicionales para el espacio

        // Agregar celda para la etiqueta en la fila anterior
        $this->Cell(0, 10, $label, 0, 1, 'L');

        // Agregar celda para el valor con altura automática
        $this->MultiCell(0, 10, $value, 1, 'L');

        // Agregar espacio vertical después de la descripción
        $this->Ln(5);
    }

    function AddFormInput($label1, $value1, $label2 = '', $value2 = ''){
        $this->SetFont('helvetica', '', 10);

        // Alineación de los campos
        $this->SetX(10);

        // Eliminar espacios en blanco al principio y al final de los valores
        $value1 = trim($value1);
        $value2 = trim($value2);

        // Obtener el ancho de las etiquetas y valores
        $labelWidth1 = $this->GetStringWidth($label1);
        $valueWidth1 = $this->GetStringWidth($value1);
        $labelWidth2 = $this->GetStringWidth($label2);
        $valueWidth2 = $this->GetStringWidth($value2);

        // Calcular el ancho total de las celdas
        $cellWidth1 = max($labelWidth1, $valueWidth1) + 6; // 6 unidades adicionales para el espacio
        $cellWidth2 = max($labelWidth2, $valueWidth2) + 6; // 6 unidades adicionales para el espacio

        // Agregar celdas para las etiquetas y valores
        $this->SetFont('helvetica', 'B', 10); // Negrita
        $this->Cell($labelWidth1, 10, strtoupper($label1), 0); // Etiqueta 1 en mayúsculas y negrita
        $this->Cell(6); // Separación entre las columnas
        $this->SetFont('helvetica', '', 10); // Restaurar la fuente regular
        $this->Cell($valueWidth1, 10, $value1, 0); // Valor 1

        // Agregar separación entre los conjuntos de datos
        $this->Cell(10);

        $this->SetFont('helvetica', 'B', 10); // Negrita
        $this->Cell($labelWidth2, 10, strtoupper($label2), 0); // Etiqueta 2 en mayúsculas y negrita
        $this->Cell(6); // Separación entre las columnas
        $this->SetFont('helvetica', '', 10); // Restaurar la fuente regular
        $this->Cell($valueWidth2, 10, $value2, 0); // Valor 2

        // Salto de línea después de cada conjunto de datos
        $this->Ln(11);
    }
}
$nombreUsuario = $usuarioC['nombre'];

// Consultar los datos del estudiante y del proyecto en la tabla proyectos_defensa usando JOIN
$consultaProyectosDefensa = "SELECT pd.*, e.extencion,e.año_egreso,e.correo,l.nombre_lice, e.nombreCompleto AS nombreEstudiante, e.carnet,e.celular, c.nombre_carrera,m.nombreM,t.proyectoEs,ei.instancia 
FROM proyectos_defensa pd
INNER JOIN estudiantes e ON pd.estudiantes_id = e.id
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        INNER JOIN tipo_proyecto t ON pd.proyectoes_id = t.id
INNER JOIN licenciados l ON pd.licenciados_id = l.id
        INNER JOIN etapas_instancia ei ON pd.etapas_instancia_id = ei.id
                            WHERE e.nombreCompleto = '$nombreUsuario'";
$resultadoProyectosDefensa = mysqli_query($con, $consultaProyectosDefensa);

// Consultar los datos del estudiante en la tabla archivosinsta
$consultaArchivosInsta = "SELECT DISTINCT tipo_documento FROM archivosinsta WHERE estudiante = '$nombreUsuario'";
$resultadoArchivosInsta = mysqli_query($con, $consultaArchivosInsta);

$pdf = new PDF();
$pdf->SetProtection(['print', 'copy'], '', null, 0, null);
$pdf->AddPage();

// Establecer posición inicial para mantener el logo en la parte superior
$pdf->SetXY(20, 35);

if ($resultadoProyectosDefensa && mysqli_num_rows($resultadoProyectosDefensa) > 0) {
    while ($datosProyecto = mysqli_fetch_assoc($resultadoProyectosDefensa)) {
        $pdf->Cell(0, 10, '', 0, 1); // Espacio entre tarjetas
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0, 10, 'PROYECTO DE DEFENSA', 0, 1); // Título en mayúsculas y negrita
        $pdf->SetFont('helvetica', '', 12);

        // Mantener el título y la descripción
        $pdf->AddDescription('TÍTULO DEL PROYECTO', $datosProyecto['titulo']);

        // Imprimir los demás elementos en dos líneas
        $pdf->AddFormInput('NOMBRE COMPLETO', $datosProyecto['nombreEstudiante'], 'CARNET DE IDENTIDAD', $datosProyecto['carnet']);
        $pdf->AddFormInput('CORREO', $datosProyecto['correo'], 'TUTOR', $datosProyecto['nombre_lice']);
        $pdf->AddFormInput('CARRERA ID', $datosProyecto['nombre_carrera'], 'MODALIDAD ID', $datosProyecto['nombreM']);
        $pdf->AddFormInput('TIPO DE PROYECTO ID', $datosProyecto['proyectoEs'], 'INSTANCIA ID', $datosProyecto['instancia']);
        $pdf->AddFormInput('AÑO EGRESO', $datosProyecto['año_egreso'], 'CELULAR', $datosProyecto['celular']);
        $pdf->AddFormInput('FECHA DE ENTREGA', $datosProyecto['fecha_entrega']);

        
        $pdf->AddDescription('DESCRIPCIÓN DEL PROYECTO', $datosProyecto['descripcion']);
    }
} else {
    $pdf->Cell(0, 10, "No se encontraron proyectos en proyectos_defensa para el estudiante con nombre de usuario: $nombreUsuario", 0, 1);
}


// Mostrar los datos de archivosinsta
if ($resultadoArchivosInsta && mysqli_num_rows($resultadoArchivosInsta) > 0) {
    $pdf->Cell(0, 10, '', 0, 1); // Espacio entre tarjetas
    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->Cell(0, 10, 'Archivos Subidos', 0, 1);
    $pdf->SetFont('helvetica', '', 12);

    // Crear la tabla
    $pdf->SetFillColor(200, 220, 255); // Color de fondo azul claro
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(80, 10, 'Archivos Subidos', 1, 0, 'C', 1); // Encabezado de la columna 1
    $pdf->Cell(40, 10, 'Suvida exitosa', 1, 1, 'C', 1); // Encabezado de la columna 2

    while ($tipoDocumento = mysqli_fetch_assoc($resultadoArchivosInsta)) {
        // Contenido de la tabla
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(80, 10, $tipoDocumento['tipo_documento'], 1); // Contenido de la columna 1 (nombre de archivo)
        $pdf->Cell(40, 10, 'SI', 1, 1, 'C'); // Contenido de la columna 2 (vacía)
    }
} else {
    $pdf->Cell(0, 10, "No se encontraron archivos subidos para el estudiante con nombre de usuario: $nombreUsuario", 0, 1);
}
// Ajusta la posición Y para evitar que el contenido se sobreponga al encabezado en la siguiente página
$pdf->Output('informe_proyectos.pdf', 'I');
?>
