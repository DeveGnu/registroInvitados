<?php
require('fpdf.php');

//-------------------------------- Variables ------------------

/*
$Titulo = 'Ficha de registro';
$Nombre = 'Nombre';
$Apaterno = 'Apellido Paterno';
$Amaterno = 'Apellido Materno';
$Institucion = 'Institución';
$Correo = 'email';

$TC = "Esta es su ficha de pre registro para el evento, 
es importante que la presente para poder acceder y asi confirmar su asistencia en el mismo.";

$Banner = 'Desarrollado por Trebola';
*/
$Titulo = 'Ficha de registro';
$Nombre = $_GET['name'];
$Apaterno = $_GET['aPaterno'];
$Amaterno = $_GET['aMaterno'];
$Institucion = $_GET['institucion'];
$Puesto = $_GET['puesto'];
$Correo = $_GET['email'];

$TC = "Esta es su ficha de pre registro para el evento,
es importante que la presente para poder acceder y asi confirmar su asistencia en el mismo.";

$Banner = 'Desarrollado por Trebola';
//------------------------------------------------------------


$pdf = new FPDF();

$pdf->AddPage();
//----------------------- CABECERA -----------------------
$pdf->SetFont('Arial','B',20);
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,35,$Titulo,0,1,'C');
$pdf->Ln(85);

//----------------------- CODIGO QR -----------------------
//$pdf->Image("../QRInvitados".$Correo.".png",5,5,30);
//$pdf->Image("../QRInvitados/dsa@sadf.com.png",70,50,70);//url|->|v|tamano
$pdf->Image("../QRInvitados/".$Correo.".png",70,50,70);//url|->|v|tamano
//----------------------- NOMBRE -----------------------
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,15,$Nombre,0,1,'C');

//----------------------- APELIDO PATERNO -----------------------
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,15,$Apaterno,0,1,'C');

//----------------------- APELLIDO MATERNO -----------------------
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,15,$Amaterno,0,1,'C');

//----------------------- INSTITUCION -----------------------
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,15,$Institucion,0,1,'C');

//----------------------- PUESTO -----------------------
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,15,$Puesto,0,1,'C');

//----------------------- CORREO -----------------------
$pdf->Cell(75);//Espacio de izquierda a derecha
$pdf->Cell(40,25,$Correo,0,1,'C');

//----------------------- TERMINOS Y CONDICIONES -----------------------
$pdf->MultiCell(200,8,$TC,0,'L',0);//|<--->|v^|texto|borde|orientacion|

//----------------------- FOOTER-----------------------
$pdf->SetY(-15);
$pdf->SetFont('Arial','I',8);
$pdf->SetTextColor(128);
$pdf->Cell(0,10,$Banner,0,0,'C');


$pdf->Output();

?>

