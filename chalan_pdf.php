<?php 
require("config.php");
$chalan_no=$_GET['chalan_no'];
$q="select * from chalan where `chalan_no`='$chalan_no'";
$e=mysqli_query($conn,$q);
$d=mysqli_fetch_array($e);	
require("fpdf.php");
$pdf=new FPDF('P','mm','A4');
$pdf->Addpage();

$pdf->SetFont('Arial','b',12);
$pdf-> SetTextColor(18,10,143);

$pdf-> Cell('0','10',"",0,1,"L");
$pdf-> Cell('0','1',"TIN:03431114783 ",0,1,"L");
$pdf-> Cell('0','1',"CHALLAN FORM",0,0,"C");
$pdf-> Cell('0','1',"(M)94170-26373",0,1,"R");
$pdf-> Cell('0','7',"  PH:2426373",0,1,"R");
 $pdf->SetFont('Arial','b',35);
$pdf->Image('img/logo_login.png',50,120,100,70);

$pdf-> Cell('0','20',"G.G.S INDUSTRIES",0,1,"C");
$pdf->SetFont('Arial','b',12);
$pdf-> Cell('0','2',"H.No.2731/1,St.No.4,Vishawkarma Town,",0,1,"C");
$pdf-> Cell('0','8',"Opp.Atam Park,LUDHIANA-141003.",0,1,"C");
$pdf-> Cell('0','10',"",0,1,"L");
$chalan_no=$d['chalan_no'];
$pdf->SetFont('Arial','b',12);
$pdf->Write(7,'No. ');
$pdf->SetFont('Arial','b',15);
$pdf->SetTextColor(153,0,153);
$pdf->Write(7,$chalan_no);
$pdf->Ln(7);
$pdf->SetFont('Arial','b',12);

$pdf-> SetTextColor(18,10,143);
$date=$d['date'];
$name=$d['name'];
$particulars=$d['particulars'];
$quantity=$d['quantity'];
$pdf-> Cell('0','-5',"Dated: ".$date,0,1,"R");
$pdf-> Cell('0','20',"",0,1,"L");
$pdf-> Cell('0','-5',"To M/s.            ".$name,0,1,"L");
$pdf-> Cell('0','30',"________________________________________________________________________________ ",0,1,"L");
$pdf-> Cell('0','0',"Please received the following goods in good conditions.",0,1,"C");
$pdf-> Cell('0','6',"",0,1,"C");
$pdf-> Cell('60','10',"Qnty.",1,0,"C");
$pdf-> Cell('130','10',"PARTICULARS",1,1,"C");
$x = $pdf->GetX();
$y = $pdf->GetY();



$pdf->MultiCell(60, 10, $quantity, 1,"C");

$pdf->SetXY($x + 60, $y);


$pdf->MultiCell(130, 10, $particulars, 1,"C");
$pdf->Ln(0);
$x = $pdf->GetX();
$y = $pdf->GetY();


$pdf->MultiCell(60, 10,"", 1,"C");

$pdf->SetXY($x + 60, $y);


$pdf->MultiCell(130, 10, "", 1,"C");
$pdf->Ln(0);

$pdf-> write('80',"Receiver's Sig.",0,1,"L");
$pdf-> Cell('0','80',"Signature",0,1,"R");





$pdf->output();



 ?>