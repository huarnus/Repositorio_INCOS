<?php
// Incluir la librería TCPDF
include("../tcpdf.php");

$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : '';
$buscar = isset($_POST['buscar']) ? $_POST['buscar'] : '';

class PDF extends TCPDF {
    function configurarEncabezado() {
        $this->SetFont('times', 'B', 18);
        $this->Image('../imagenes/logoincos.jpg', 10, 8, 30);
        $this->Cell(0, 10, 'Instituto Técnico Comercial Superior de la Nación', 0, 1, 'C');
        $this->Cell(0, 10, 'Tte. Armando de Palacios', 0, 1, 'C');
        
        $this->Cell(0, 10, 'INCOS La Paz', 0, 1, 'C');
        $this->Cell(0, 10, 'Informe de Estudiantes' , 0, 1, 'C');
        
        $this->SetDrawColor(0, 140, 0);
        $this->SetLineWidth(1);
        $this->Line(45, 40, 280, 40);
         $this->Ln(5);
    }
   
    function imprimirTabla($header, $data) {
     date_default_timezone_set('America/La_Paz');
        $this->Cell(0, 10, 'Fecha Generada '. date('Y-m-d') , 0, 1, 'C');
        $this->SetFont('times', '', 8);
        $maxCellHeight = 10; // Altura máxima de una celda
    
        foreach ($header as $col) {
            $colWidth = $this->getStringWidth($col) + 12;
            $columnWidths[] = $colWidth;
        }
    
        foreach ($data as $row) {
            foreach ($row as $key => $value) {
                $colIndex = array_search($key, array_keys($row));
                $colWidth = $this->getStringWidth($value) + 12;
                if ($colWidth > $columnWidths[$colIndex]) {
                    $columnWidths[$colIndex] = $colWidth;
                }
            }
        }
        $this->SetFillColor(200, 220, 255);
        $this->SetTextColor(0);
    
        foreach ($header as $colIndex => $col) {
            $this->Cell($columnWidths[$colIndex], $maxCellHeight, $col, 1, 0, 'C', 1);
        }
    
        $this->Ln();
    
        $this->SetFillColor(255);
    
        foreach ($data as $row) {
            foreach ($row as $colIndex => $value) {
                // Verificar si el contenido de la celda excede la altura máxima
                $lines = $this->getNumLines($value, $columnWidths[$colIndex]);
                $cellHeight = $lines * $maxCellHeight;
                if ($cellHeight > $maxCellHeight) {
                    // Salto de línea en el encabezado
                    $this->configurarEncabezado();
                }
    
                $this->Cell($columnWidths[$colIndex], $maxCellHeight, $value, 1);
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
include("../../partir/conexion.php");

// Modificar la consulta para incluir la búsqueda si se proporciona
$selectQuery = "SELECT h.*  FROM historial_proyectos h";

    if (!empty($filtro) && !empty($buscar)) {
        switch ($filtro) {
            case 'estudiante':
                $selectQuery .= " WHERE h.estudiante_nombre LIKE '%$buscar%'";
                break;
                case 'instancia':
                    $selectQuery .= " WHERE h.etapas_instancia LIKE '%$buscar%'";
                    break;

                    case 'modalidad':
                        $selectQuery .= " WHERE h.modalidad LIKE '%$buscar%'";
    
                        break;
    
                    case 'tutor':
                        $selectQuery .= " WHERE h.tutor LIKE '%$buscar%'";
                        break;
                    case 'titulo':
                        $selectQuery .= " WHERE h.titulo LIKE '%$buscar%'";
                        break;
                        case 'carrera':
                            $selectQuery .= " WHERE h.carrera LIKE '%$buscar%'";
                            break;
        }
    }

$resultado = mysqli_query($con, $selectQuery);

// Definir encabezado y datos
$header = array('Nro',  'Nombre Completo','Tutor','Modalidad', 'Carrera', 'Instancia', 'Fecha Entrega','Fecha Actualizacion');

$data = array();
$numero = 1;
while ($tupla = mysqli_fetch_array($resultado)) {
    
    $data[] = array(
        $numero++, // Incrementar y utilizar el númer
       
        $tupla['estudiante_nombre'],
        // $tupla['titulo'],
        $tupla['tutor'],
        $tupla['modalidad'],
        $tupla['carrera'],
        $tupla['etapas_instancia'],
        $tupla['fecha_entrega'],
        $tupla['fecha_actualizacion'],
        
    );
}

$pdf->imprimirTabla($header, $data);
$pdf->Output('reporte.pdf', 'I');
?>
