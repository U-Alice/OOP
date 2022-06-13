<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Ln();
// Set font format and font-size
$pdf->SetFont('Times', 'B', 12);
// Framed rectangular area
$pdf->Cell(176, 10, 'A Computer Science Portal for geek!', 0, 0, 'C');
// Close document and sent to the browser
$pdf->Output();
?>