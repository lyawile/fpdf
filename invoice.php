<?php

require './fpdf/fpdf.php';
// A4 width : 219mm
//default margin: 10mm each side
//writable horizontal : 219 - (10*2) = 189mm

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Set font to Arial, Bold, 14pt 
$pdf->setFont('Arial', 'B', 14);
// cell(width, height, text, border, end line, [align])
for ($i = 0; $i < 78; $i++) {
    if ($i % 25 == 0) {
        $pdf->Cell(130, 10, 'Majina', 1, 0);
        $pdf->Cell(59, 10, 'Jinsi', 1, 1);
    }
    $pdf->Cell(130, 10, '', 1, 0);
    $pdf->Cell(59, 10, '', 1, 1);
}

$pdf->Output();

