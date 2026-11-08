<?php
require('tcpdf.php');

class PDF extends TCPDF {
    function configurarEncabezado() {
        $this->SetFont('times', 'B', 18);
        $this->Image('imagenes/logoincos.jpg', 10, 8, 30);
        $this->Cell(0, 10, 'Instituto Técnico Comercial Superior de la Nación', 0, 1, 'C');
        $this->Cell(0, 10, 'Tte. Armando de Palacios', 0, 1, 'C');
        $this->Cell(0, 10, 'INCOS La Paz', 0, 1, 'C');
        $this->Cell(0, 10, 'Reporte de Estudiantes', 0, 1, 'C');
        $this->SetDrawColor(0, 140, 0);
        $this->SetLineWidth(1);
        $this->Line(45, 40, 280, 40);
        $this->Ln(20);
    }

    function imprimirTabla($header, $data) {
        date_default_timezone_set('America/La_Paz');
        $this->Cell(0, 10, 'Fecha Generada '. date('Y-m-d') , 0, 1, 'C');
        $this->SetFont('times', '', 12);
        $columnWidths = [];

        foreach ($header as $col) {
            $colWidth = $this->getStringWidth($col) + 6;
            $columnWidths[] = $colWidth;
        }

        foreach ($data as $row) {
            foreach ($row as $key => $value) {
                $colIndex = array_search($key, array_keys($row));
                $colWidth = $this->getStringWidth($value) + 6;
                if ($colWidth > $columnWidths[$colIndex]) {
                    $columnWidths[$colIndex] = $colWidth;
                }
            }
        }
        $this->SetFillColor(200, 220, 255);
        $this->SetTextColor(0);

        foreach ($header as $colIndex => $col) {
            $this->Cell($columnWidths[$colIndex], 10, $col, 1, 0, 'C', 1);
        }

        $this->Ln();

        $this->SetFillColor(255);

        foreach ($data as $row) {
            foreach ($row as $colIndex => $value) {
                $this->Cell($columnWidths[$colIndex], 10, $value, 1);
            }
            $this->Ln();
        }
    }
}

$pdf = new PDF('L', 'mm', 'legal');
$pdf->SetProtection(['print', 'copy'], '', null, 0, null);
$pdf->AddPage();
$pdf->configurarEncabezado();

// Obtén los datos de los estudiantes desde tu base de datos
include("../partir/conexion.php");
$consulta = "SELECT e.*, ca.nombre as Cargo,
                        CONCAT(e.nombreCompleto) AS NombreCompleto,
                        CONCAT(e.carnet, ' ', e.extencion) AS Carnet,
                        e.celular AS Celular,
                        e.año_egreso AS AnoEgreso,
                        e.correo AS CorreoElectronico,
                        e.estado AS Estado
                 FROM estudiantes e
                 INNER JOIN cargo ca ON e.cargo_id = ca.id
                 WHERE e.estado = '1'";

$resultado = mysqli_query($con, $consulta);

// Definir encabezado y datos
$header = array('ID', 'Cargo', 'Nombre Completo', 'Carnet', 'Celular', 'Ano de Egreso', 'Correo Electronico');

$data = array();

while ($tupla = mysqli_fetch_array($resultado)) {
    $data[] = array(
        $tupla['id'],
        $tupla['Cargo'],
        $tupla['NombreCompleto'],
        $tupla['Carnet'],
        $tupla['Celular'],
        $tupla['AnoEgreso'],
        $tupla['CorreoElectronico'],
        // $tupla['Estado']
    );
}

$pdf->imprimirTabla($header, $data);

// Visualizar en una nueva pestaña
$pdf->Output('informe_estudiantes_activos.pdf', 'I');
?>
