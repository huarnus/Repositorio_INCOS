<?php
    include "fpdf.php";
    require "../modelo/conexion.php";
    include "../modelo/cargoClase.php";

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
        $this->Cell(120,25,'Reporte cargo',1,1,'C');
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
    $pdf->SetFont('Times','',12);


    $pdf->SetFillColor(255,192,192);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,'Id',1,0,'C',1);
    $pdf->Cell(175,10,'cargo',1,1,'C',1);


    $cli=new Cargo("","");
    $resultado=$cli->reporte();
    while($row = $resultado->fetch_assoc())
    {
        $pdf->Cell(20,10,utf8_decode($c),1,0,'C');
        $pdf->Cell(175,10,utf8_decode($row['cargo']),1,1,'C');

        $c++;
    }
    $pdf->Output();
?>