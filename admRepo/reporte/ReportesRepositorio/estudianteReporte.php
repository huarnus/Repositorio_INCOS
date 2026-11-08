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
$consulta = "SELECT u.*, e.correo, e.año_egreso, u.nombre,c.nombre as nombreC , e.carnet,e.id as id_es, e.extencion,e.celular, e.extencion
        FROM usuario u
        INNER JOIN estudiantes e ON u.estudiantes_id=e.id
        INNER JOIN cargo c ON u.cargo_id=c.id
        -- INNER JOIN carrrera c ON pd.carrrera_id = c.id
        ";


// Verificar si se proporcionan parámetros de búsqueda
if (!empty($filtro) && !empty($buscar)) {
    switch ($filtro) {
        case 'nombreC':
            $consulta .= " AND c.nombre LIKE '%$buscar%'";
            break;

        case 'nombre':
            $consulta .= " WHERE u.nombre LIKE '%$buscar%'";
            break;
        case 'carnet':
            $consulta .= " WHERE e.carnet LIKE '%$buscar%'";
            break;
        // case 'tutor':
        //     $consulta .= " WHERE pd.tutor LIKE '%$buscar%'";
        //     break;
        // case 'titulo':
        //     $consulta .= " WHERE pd.titulo LIKE '%$buscar%'";
        //     break;
        // case 'instancia':
        //     $consulta .= " WHERE ei.instancia LIKE '%$buscar%'";
        //     break;
    }
}

$resultado = mysqli_query($con, $consulta);

// Definir encabezado y datos
$header = array('Nro', 'Tipo Postulante', 'Nombre Completo','Cedula','Celular', 'Usuario', 'Correo Electronico', 'Año de Egreso');

$data = array();
$numero = 1;
while ($tupla = mysqli_fetch_array($resultado)) {
    
    $data[] = array(
        $numero++, // Incrementar y utilizar el númer
       
        $tupla['nombreC'],
        $tupla['nombre'],
        $tupla['carnet']." ".$tupla['extencion'],
        $tupla['celular'],
        $tupla['usuario'],
        $tupla['correo'],
        $tupla['año_egreso'],
        
    );
}

$pdf->imprimirTabla($header, $data);
$pdf->Output('reporte.pdf', 'I');
?>
