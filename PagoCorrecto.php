<?php
session_start();
session_id();
$dbhost="localhost";
   $dbuser="root";
   $dbpassword="";
   $dbname="AutoAct";
   $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

  if($conn -> connect_error)
  {
    die("No se pudo conectar al servidor".$conn->connect_error);
  }
  if( $_POST["Buscar"] ){
    foreach($_POST as $campo => $valor) {
        $_SESSION['registro'][$campo] = $valor;
  
         $_SESSION['registro']['Nombre'];
         $_SESSION['registro']['ApellidoP'];
         $_SESSION['registro']['ApellidoM'];
         $_SESSION['registro']['Sexo'];
         $_SESSION['registro']['FechaNac'];
         $_SESSION['registro']['Estado'];
    }
  }
    
  //-----------------------------------------------------------------------------------
  //    Ejemplo básico de utilización de fPDF
  //-----------------------------------------------------------------------------------
  require('./fpdf184/fpdf.php');

  class PDF extends FPDF
  {
  public function Header()
  {

    $pdf->Image('./Img/logo-web.png',10,6,30);

    $pdf->Write(5, 'Registro civil');

  }
  function Footer()
  {
    // Position at 1.5 cm from bottom
    $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
  }
  }


  $pdf=new FPDF();
  $pdf->AddPage();
  $pdf->Image('./Img/Screenshot 2022-03-27 155824.png',0,0,210);
  $pdf->Ln(10);
  $pdf->Image('./Img/logo-web.png',55,25,80);
  $pdf->Image('./Img/Side.png',0,0,7);
  $pdf->Image('./Img/Side.png',0,80,7);
  $pdf->Image('./Img/Side.png',203,0,7);
  $pdf->Image('./Img/Side.png',203,80,7);
  $pdf->Image('./Img/Footer.png',0,235,209);
  $pdf->Image('./Img/Mid.png',10,190,190);
  $pdf->Ln(30);
  $pdf->SetFont('Arial','B',28);
  $pdf->Cell(195,30,'Estados Unidos Mexicanos',0,0,'C');
  $pdf->Ln();
  $pdf->Cell(195,10,'Acta de nacimiento',0,0,'C');
  $pdf->Ln();
  $pdf->Ln();
  $pdf->SetFont('Arial','B',20);
  $pdf->Cell(60,10,utf8_decode($_SESSION["registro"]["Nombre"]),0,0,'C');
  $pdf->Cell(60,10,utf8_decode($_SESSION["registro"]["ApellidoP"]),0,0,'C');
  $pdf->Cell(60,10,utf8_decode($_SESSION["registro"]["ApellidoM"]),0,0,'C');
  $pdf->Ln();
  $pdf->SetFont('Arial','U',12);
  $pdf->Cell(60,10,'Nombre(s)',0,0,'C');
  $pdf->Cell(60,10,'Apellido paterno',0,0,'C');
  $pdf->Cell(60,10,'Apellido materno',0,0,'C');
  $pdf->Ln(30);
  $pdf->SetFont('Arial','B',20);
  $pdf->Cell(60,10,utf8_decode($_SESSION["registro"]["Sexo"]),0,0,'C');
  $pdf->Cell(60,10,utf8_decode($_SESSION["registro"]["FechaNac"]),0,0,'C');
  $pdf->Cell(60,10,utf8_decode($_SESSION["registro"]["Estado"]),0,0,'C');
  $pdf->Ln();
  $pdf->SetFont('Arial','U',12);
  $pdf->Cell(60,10,'Sexo',0,0,'C');
  $pdf->Cell(60,10,'Fecha de nacimiento',0,0,'C');
  $pdf->Cell(60,10,'Estado de registro',0,0,'C');
  $pdf->Output();
?>