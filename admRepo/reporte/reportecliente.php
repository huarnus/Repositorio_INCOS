<?php
    include "fpdf.php";
    require "../modelo/conexion.php";
    include "../modelo/clienteClase.php";

    class PDF extends FPDF
{
    //CABESERA DE PAGUINA 
    function Header()
    {
        $this->Image('imagenes/logo.png',30,8,25);
        //arial bold 15
        $this->SetFont('Arial','B',15);
        //mover ala derecha
        $this->Cell(60);
        //titulo
        $this->Cell(120,25,'Reporte Cliente',1,1,'C');
        //salto de linea
        $this->Ln(15);
    }
    //pie de pagina
    function Footer(){
        //posicion: a 1.5 cm del final
        $this->SetY(-15);
        //arial italic 8
        $this->SetFont('Arial','I',8);
        //numero de paguina
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }

}
    //creacion del objetivo de la clase herramienta
    $pdf=new PDF();
    $c=1;
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',10);
    $pdf->Cell(20);

    $pdf->SetFillColor(192,192,192);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,'Nro',1,0,'C',1);
    $pdf->Cell(100,10,'RAZON SOCIAL',1,0,'C',1);
    $pdf->Cell(40,10,'CI / NIT',1,1,'C',1);

    $pdf->SetFont('Arial','',10);

    $cli=new Cliente("","","","");
    $resultado=$cli->reporte();
    while($row = $resultado->fetch_assoc())
    {
        $pdf->Cell(20);
        $pdf->Cell(20,6,utf8_decode($c),1,0,'C');
        $pdf->Cell(100,6,utf8_decode($row['razonsocial']),1,0,'C');
        $pdf->Cell(40,6,utf8_decode($row['nit_ci']),1,1,'C');

        $c++;
    }
    $pdf->Output();
?>