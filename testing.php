<?php 
require("fpdf.php"); 
$pdf=new FPDF();

$pdf-> AddPage();
$pdf-> SetFillColor(12,29,253);

$pdf->SetTitle("Challan Form");

$pdf-> SetFont("Arial","B",12);
$pdf-> SetTextColor(18,10,143);
$pdf-> SetDrawColor(253,12,120);
$pdf-> SetFillColor(12,29,253);
$pdf->Cell(95,10,"heading 1",1,0,"C");
$pdf->Cell(95,10,"heading 1",1,1,"C");

$pdf->MultiCell(95,10,"Lorem ipsum dolor ",1,0,"L"); 
$pdf->		MultiCell(95,10,"heading 1",1,0,"C");

$x = $pdf->GetX();
$y = $pdf->GetY();



$pdf->MultiCell(110, 10, "Lorem ", 1,"C");

$pdf->SetXY($x - 110, $y);


$pdf->MultiCell(63, 10, "satnam", 1,"c");
$pdf->Ln(0);

$pdf->SetFont('Arial','b',12);
$pdf->SetTextColor(0,0,0);
$pdf->Write(7,'No. ');
$pdf->SetFont('Arial','b',15);
$pdf->SetTextColor(153,0,153);
$pdf->Write(7,'625');
$pdf->SetFont('Arial','b',12);
$pdf->SetTextColor(0,0,0);


$pdf->Ln(7);
$pdf-> Cell('0','-30',"Dated:...................................",0,1,"R");
$pdf-> Cell('0','-30','<table><th><td>hello</td></th></table>',0,1,"R");
$pdf->Image('img/logo_login.png',50,60,60);

$pdf->output();


?>