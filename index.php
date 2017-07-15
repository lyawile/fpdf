<?php

$date = date("Y-M-D");
require './fpdf/fpdf.php';

class PDF extends FPDF {

    function Header() {
//        $this->Image('MIT.png', 10, 6, 30);
        $this->SetFont('Arial', 'B', 15);
        $this->cell(0, 20, 'PAYMENT RECEIPT', 0, 0);
        $this->Cell(80); // move the logo to the right of the document 
        $this->Cell(30, 10, 'Title', 1, 0, 'c');
        $this->Ln(20);
    }

    function footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page' . $this->PageNo() . ' of {nb}', 0, 0, 'c');
    }

}

//$pdf = new FPDF;
//$pdf->AddPage();
//$pdf->SetFont('Arial','B', 18);
//$pdf->Cell(40,10,$date,0,1);
//$pdf->Cell(60,10,$date,0,1,'c');
//$pdf->Cell(0,50,'The other content goes here down');
//$pdf->Output();
$pdf = new PDF('P','mm',array(162,114));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 15);
$pdf->Cell(0, 10, "Printing the line number ", 1, 1);
$pdf->Output();
