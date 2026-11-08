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
        $this->Cell(0, 10, 'Reporte de Estudiantes', 0, 1, 'C');
        $this->SetDrawColor(0, 140, 0);
        $this->SetLineWidth(1);
        $this->Line(45, 40, 280, 40);
        $this->Ln(20);
    }

    function imprimirTabla($header, $data) {
        date_default_timezone_set('America/La_Paz');
        $this->Cell(0, 10, 'Fecha Generada ' . date('Y-m-d'), 0, 1, 'C');
        $this->SetFont('times', '', 10);
        $maxCellHeight = 10; // Altura máxima de una celda
    
        // Configurar el ancho de las columnas según tus necesidades
        $columnWidths = array(10, 50, 40, 30, 30, 110); // Anchos de las columnas
    
        $this->SetFillColor(200, 220, 255);
        $this->SetTextColor(0);
    
        foreach ($header as $colIndex => $col) {
            $this->Cell($columnWidths[$colIndex], $maxCellHeight, $col, 1, 0, 'C', 1);
        }
    
        $this->Ln();
    
        $this->SetFillColor(255);
    
        foreach ($data as $row) {
            $currentY = $this->GetY();
            $currentX = $this->GetX();
    
            foreach ($row as $colIndex => $value) {
                $lines = $this->getNumLines($value, $columnWidths[$colIndex]);
                $cellHeight = $lines * $maxCellHeight;
    
                if ($currentY + $cellHeight > $this->getPageHeight()) {
                    $this->AddPage();
                    $this->configurarEncabezado();
                    $currentY = $this->GetY();
                    foreach ($header as $colIndex => $col) {
                        $this->Cell($columnWidths[$colIndex], $maxCellHeight, $col, 1, 0, 'C', 1);
                    }
                    $this->Ln();
                }
    
                $this->SetY($currentY);
                $this->SetX($currentX);
                
                // Utilizamos MultiCell para manejar saltos de línea en el contenido
                $this->MultiCell($columnWidths[$colIndex], $maxCellHeight, $value, 1);
                
                $currentX += $columnWidths[$colIndex];
            }
    
            // $this->Ln();
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
$consulta = "SELECT pd.*, c.nombre_carrera , m.nombreM 
FROM proyectos_repositorio pd
 JOIN carrrera c ON pd.carrrera_id = c.id
 JOIN modalidad m ON pd.modalidad_id = m.id"; 

// Verificar si se proporcionan parámetros de búsqueda
if (!empty($filtro) && !empty($buscar)) {
    switch ($filtro) {
        case 'nombre_carrera':
            $consulta .= " AND c.nombre_carrera LIKE '%$buscar%'";
            break;
       
        case 'autor':
            $consulta .= " AND pd.autor LIKE '%$buscar%'";
            break;
   
        case 'nombreM':
            $consulta .= " AND m.nombreM LIKE '%$buscar%'";

            break;

        case 'tutor':
            $consulta .= " AND pd.tutor LIKE '%$buscar%'";
            break;
        case 'titulo':
            $consulta .= " AND pd.titulo LIKE '%$buscar%'";
            break;
        case 'estado':
            $consulta .= " AND pd.estado LIKE '%$buscar%'";
            break;
}
}

$resultado = mysqli_query($con, $consulta);

// Definir encabezado y datos
$header = array('Nro', 'Nombre Completo', 'Tutor','Carrera', 'Modalidad', 'Titulo');

$data = array();
$numero = 1;
while ($tupla = mysqli_fetch_array($resultado)) {
    $data[] = array(
        $numero++, // Incrementar y utilizar el númer
       
        $tupla['autor'],
        $tupla['tutor'],
        $tupla['nombre_carrera'],
        $tupla['nombreM'],        
        $tupla['titulo'],
 
    );
}

$pdf->imprimirTabla($header, $data);
$pdf->Output('reporte.pdf', 'I');
?>
