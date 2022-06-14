<?php
require('fpdf.php');

$connection = new mysqli('localhost', 'inezaaxelle44@gmail.com', 'ine', 'rwanda');

if ($connection->connect_error) {
    die ("Error in your Connection!");
}

$select = "SELECT * FROM villages";
$result = $connection->query($select);
$pdf = new FPDF('p', 'mm', array(250,300));
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){
  $id = $row->villageId;
  $name = $row->villageName;
  $cell = $row->cellId;
  $pdf->Cell(40,10,$id,1);
  $pdf->Cell(40,10,$name,1);
  $pdf->Cell(80,10,$cell,1);
  $pdf->Ln();
}
$pdf->Output();
?>