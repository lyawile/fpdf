<?php
$date = date("Y-M-D");
require './fpdf/fpdf.php';
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 18);
$pdf->Cell(40,10,$date);
$pdf->Cell(60,10,$date,0,1,'c');
$pdf->Cell(60,10,'The other content goes here down');
$pdf->Output();