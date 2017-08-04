<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
header('Content-Type: text/html; charset=UTF-8');
define('FPDF_FONTPATH','font/');
require('fpdf.php');
require('conn.php');

$sqlnamecoo = "SELECT value FROM config_value WHERE category = '01' and section = '00'";
$resultnamecoo = $conn->query($sqlnamecoo);
$namecoo = $resultnamecoo->fetch_assoc();

$sqladdresscoo = "SELECT value FROM config_value WHERE category = '01' and section = '01'";
$resultaddresscoo = $conn->query($sqladdresscoo);
$addresscoo = $resultaddresscoo->fetch_assoc();

$sqlnumcoo = "SELECT value FROM config_value WHERE category = '01' and section = '03'";
$resultnumcoo = $conn->query($sqlnumcoo);
$numcoo = $resultnumcoo->fetch_assoc();

$sqlphonecoo = "SELECT value FROM config_value WHERE category = '01' and section = '02'";
$resultphonecoo = $conn->query($sqlphonecoo);
$phonecoo = $resultphonecoo->fetch_assoc();

$dateSlip = date('d').'/'. date('m').'/'.(  date('Y')+543 );
$timeSlip = date('H:i:s');
$acc_no = $account_id;
$book_no = $bookac_no_wd;
$fullname = $name;
$period = $period;
$amount = number_format($money,2);
$olddeposit = $oldmoney;

$total = number_format(str_replace(',', '', $oldmoney) - str_replace(',', '', $amount),2) ;

$pdf=new FPDF('p','mm',array(80 ,150 ));
$pdf->SetMargins( 5,0,0 );
$pdf->AddPage();

// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวธรรมดา กำหนด ชื่อ เป็น angsana
$pdf->AddFont('cordia','','cordia.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('cordia','B','cordiab.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('cordia','I','cordiai.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('cordia','BI','cordiaz.php');

$pdf->SetFont('cordia','',16);

$pdf->Ln(5);

$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , 'ใบเสร็จรับเงิน' ) , 0 , 0 ,'C' );

$pdf->Ln(6);
$pdf->SetFont('cordia','',20);
$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , $namecoo['value'] ) , 0 , 0 ,'C' );

$pdf->Ln(6);
$pdf->SetFont('cordia','',9);
$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , $addresscoo['value'] ) , 0 , 0 ,'C' );

$pdf->Ln(4);
$pdf->SetFont('cordia','',12);
$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , $numcoo['value'] ) , 0 , 0 ,'C' );

$pdf->Ln(3);
$pdf->SetFont('cordia','',24);
$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , '---------------------------------------' ) , 0 , 0 ,'C' );

$pdf->Ln(6);
$pdf->SetFont('cordia','',14);
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , 'วันที่ : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 25  , 0 , iconv( 'UTF-8','cp874' , $dateSlip ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , 'เวลา : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 25  , 0 , iconv( 'UTF-8','cp874' , $timeSlip ) , 0 , 0 ,'L' );

$pdf->Ln(6);
$pdf->Cell( 30  , 0 , iconv( 'UTF-8','cp874' , 'รหัสสมาชิกสหกรณ์ : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , $acc_no ) , 0 , 0 ,'L' );

$pdf->Ln(6);
$pdf->Cell( 18  , 0 , iconv( 'UTF-8','cp874' , 'เลขที่บัญชี : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , $book_no ) , 0 , 0 ,'L' );

$pdf->Ln(6);
$pdf->Cell( 21  , 0 , iconv( 'UTF-8','cp874' , 'ชื่อ-นามสกุล : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , $fullname ) , 0 , 0 ,'L' );


$pdf->Ln(6);
$pdf->Cell( 15  , 0 , iconv( 'UTF-8','cp874' , 'ประเภท : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , 'ออมทรัพย์' ) , 0 , 0 ,'L' );

$pdf->Ln(6);
$pdf->Cell( 15  , 0 , iconv( 'UTF-8','cp874' , 'รายการ : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , 'ถอนเงิน' ) , 0 , 0 ,'L' );

$pdf->Ln(6);
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , 'งวด : ' ) , 0 , 0 ,'L' );
$pdf->Cell( 10  , 0 , iconv( 'UTF-8','cp874' , $period ) , 0 , 0 ,'L' );

$pdf->Ln(12);

$pdf->Cell( 15  , 0 , iconv( 'UTF-8','cp874' , 'ยอดเงินคงเหลือเก่า' ) , 0 , 0 ,'L' );
$pdf->Cell( 48  , 0 , iconv( 'UTF-8','cp874' , $olddeposit ) , 0 , 0 ,'R' );
$pdf->Cell( 9  , 0 , iconv( 'UTF-8','cp874' , 'บาท' ) , 0 , 0 ,'R' );

$pdf->Ln(6);
$pdf->Cell( 15  , 0 , iconv( 'UTF-8','cp874' , 'จำนวนเงินฝาก' ) , 0 , 0 ,'L' );
$pdf->Cell( 48  , 0 , iconv( 'UTF-8','cp874' , $amount ) , 0 , 0 ,'R' );
$pdf->Cell( 9  , 0 , iconv( 'UTF-8','cp874' , 'บาท' ) , 0 , 0 ,'R' );

$pdf->Ln(12);
$pdf->Cell( 15  , 0 , iconv( 'UTF-8','cp874' , 'ยอดเงินคงเหลือ' ) , 0 , 0 ,'L' );
$pdf->Cell( 48  , 0 , iconv( 'UTF-8','cp874' , $total ) , 0 , 0 ,'R' );
$pdf->Cell( 9  , 0 , iconv( 'UTF-8','cp874' , 'บาท' ) , 0 , 0 ,'R' );

$pdf->Ln(12);

$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , '_____________' ) , 0 , 0 ,'R' );
$pdf->Ln(5);
$pdf->SetFont('cordia','',9);
$pdf->Cell( 64  , 0 , iconv( 'UTF-8','cp874' , 'เจ้าหน้าที่' ) , 0 , 0 ,'R' );

$pdf->Ln(6);
$pdf->SetFont('cordia','',24);
$pdf->Cell( 70  , 0 , iconv( 'UTF-8','cp874' , '---------------------------------------' ) , 0 , 0 ,'C' );
$pdf->Ln(3);
$pdf->SetFont('cordia','',8);
$pdf->Cell(45,0,'Tel : '.$phonecoo['value'] ,0,0,'L');
$pdf->Cell( 0 , 0 , iconv( 'UTF-8','cp874' , $namecoo['value'] ) , 0 , 0 ,'L' );

$pdf->Ln(12);
$pdf->SetFont('cordia','',4);
$pdf->Cell( 1  , 0 , iconv( 'UTF-8','cp874' , '.' ) , 0 , 0 ,'R' );
$filename = date('d'). date('m').(  date('Y')+543 ).date('H').date('i').date('s').$book_no;
$_SESSION['filename'] = $filename;
$pdf->Output('Slip/'.$filename.'.pdf' , 'F');
?>