<?php 
require("config.php");

$invoice_no=$_GET['invoice_no'];
$q="select * from bill_invoice where `invoice_no`='$invoice_no'";
$e=mysqli_query($conn,$q);
$d=mysqli_fetch_array($e);	

require("fpdf.php");
$pdf=new FPDF('P','mm','A4');
$pdf->Addpage();
$pdf->SetTitle("Vat Invoice");


$pdf->SetFont('Arial','b',12);
$pdf-> SetTextColor(18,10,143);

$pdf-> Cell('0','10',"",0,1,"L");
$pdf-> Cell('0','1',"TIN:03431114783 ",0,1,"L");
$pdf-> Cell('0','1',"VAT INVOICE",0,0,"C");
$pdf-> Cell('0','1',"(M)94170-26373",0,1,"R");
$pdf-> Cell('0','7',"  PH:2426373",0,1,"R");
$pdf->SetFont('Arial','b',35);
$pdf->Image('img/logo.png',80,35,45,25);

$pdf->Image('img/logo_login.png',50,120,100,70);
$pdf-> Cell('0','40',"",0,1,"L");


$pdf->SetFont('Arial','b',12);
$pdf-> Cell('0','2',"Mfrs. of: Cycle Parts,Cooler Parts & Hardware Goods etc.",0,1,"C");
$pdf-> Cell('0','8',"Specialists in: ALL TYPE OF WASHERS",0,1,"C");
$pdf-> Cell('0','4',"H.No.2731/1,St.No.4,Vishawkarma Town,Opp.Atam Park,LUDHIANA-141003.",0,1,"C");

$pdf-> Cell('0','10',"",0,1,"L");

$pdf->SetFont('Arial','b',12);
$pdf->Write(7,'Invoice No. ');
$pdf->SetFont('Arial','b',15);
$invoice=$d['invoice_no'];
$pdf->SetTextColor(153,0,153);
$pdf->Write(7,$invoice);
$pdf->Ln(7);
$pdf->SetFont('Arial','b',12);

$pdf-> SetTextColor(18,10,143);
$date="Dated: ".$d['date'];
$pdf-> Cell('0','-5',$date,0,1,"R");
$pdf-> Cell('0','20',"",0,1,"L");

$name="To M/s.:                                ".$d['name'];
$pdf-> Cell('0','-5',$name,0,1,"L");
$pdf-> Cell('0','30',"________________________________________________________________________________ ",0,1,"L");
$tin_vrn_cst="TIN/VRN/CST NO.                       ".$d['tin_vrn_cst'];
// $pdf-> Cell('0','0',"TIN/VRN/CST NO.            ",0,1,"L");
$pdf-> Cell('0','-5',$tin_vrn_cst,0,1,"L");
$pdf-> Cell('0','30',"Please received the following goods in good conditions.",0,1,"C");
$pdf-> Cell('0','0',"",0,1,"C");
$pdf-> Cell('20','10',"S. No",1,0,"C");
$pdf-> Cell('80','10',"Description of Goods",1,0,"C");
$pdf-> Cell('25','10',"Qnty.",1,0,"C");
$pdf-> Cell('25','10',"RATE",1,0,"C");
$pdf-> Cell('40','10',"AMOUNT(Rs./p)",1,1,"C");


$x = $pdf->GetX();
$y = $pdf->GetY();



$pdf->MultiCell(20, 10, "1.\n2. \n3.", 1,"C");

$pdf->SetXY($x + 20, $y);

// variables 
$desc_one=$d['desc_one'];
$desc_two=$d['desc_two'];
$desc_three=$d['desc_three'];

$qty_one=$d['qty_one'];
$qty_two=$d['qty_two'];
$qty_three=$d['qty_three'];

$rate_one=$d['rate_one'];
$rate_two=$d['rate_two'];
$rate_three=$d['rate_three'];

$amount_rs_one=$d['amount_rs_one'];
$amount_rs_two=$d['amount_rs_two'];
$amount_rs_three=$d['amount_rs_three'];

$total=$d['total'];
$tax=$d['tax'];
$grand_total=$d['grand_total'];

$pdf->MultiCell(80, 10, "$desc_one\n$desc_two\n$desc_three", 1,"C");
$pdf->SetXY($x + 100, $y);

$pdf->MultiCell(25, 10, "$qty_one\n$qty_two\n$qty_three", 1,"C");
$pdf->SetXY($x + 125, $y);

$pdf->MultiCell(25, 10, "$rate_one\n$rate_two\n$rate_three", 1,"C");
$pdf->SetXY($x + 150, $y);

$pdf->MultiCell(25, 10, "$amount_rs_one\n$amount_rs_two\n$amount_rs_three", 1,"C");
$pdf->SetXY($x + 175, $y);
$pdf->MultiCell(15, 10, "  \n  ", 1,"C");
$pdf->Ln(0);
$pdf-> Cell('20','10',"",1,0,"C");
$pdf-> Cell('80','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
// total starts
$pdf-> Cell('25','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
$pdf-> Cell('15','10',"",1,1,"C");
$pdf-> Cell('20','10',"",1,0,"C");
$pdf-> Cell('80','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
// total ends
// total starts
$pdf-> Cell('25','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
$pdf-> Cell('15','10',"",1,1,"C");
$pdf-> Cell('20','10',"",1,0,"C");
$pdf-> Cell('80','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
// total ends

// total starts
$pdf-> Cell('25','10',"TOTAL",1,0,"C");
$pdf-> Cell('25','10',$total,1,0,"C");
$pdf-> Cell('15','10',"",1,1,"C");
$pdf-> Cell('20','10',"",1,0,"C");
$pdf-> Cell('80','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
// total Ends
$pdf-> Cell('25','10',"VAT%",1,0,"C");
$pdf-> Cell('25','10',(floatval($tax)),1,0,"C");
$pdf-> Cell('15','10',"",1,1,"C");
$pdf-> Cell('20','10',"",1,0,"C");
$pdf-> Cell('80','10',"",1,0,"C");
$pdf-> Cell('25','10',"",1,0,"C");
$pdf-> Cell('25','10',"G TOTAL",1,0,"C");
$pdf-> Cell('25','10',$grand_total,1,0,"C");
$pdf-> Cell('15','10',"",1,1,"C");



$pdf-> SetTextColor(255,0,0);
$pdf->SetFont('Arial','b',10);
$pdf->Write('10','"Input Tax Credit is Available on this original copy only"');
$pdf->Write('10','                                                         For GGS INDUSTRIES');
$pdf-> SetTextColor(18,10,143);
$pdf->SetFont('Arial','b',12);
$pdf-> write('15',"Receiver's Sig.",0,1,"L");
$pdf-> Cell('0','15',"Signature",0,1,"R");



$pdf->output();


 ?>