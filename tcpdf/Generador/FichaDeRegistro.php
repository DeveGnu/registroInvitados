<?php
require_once('tcpdf_include.php');

$name = GET['name'];
$email = GET['email'];

//Creacion del PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//Setear la informacion del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mariano Olivo');
$pdf->SetTitle('Ficha de registro');

//Implementar las fuentes en el header y footer
$pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

//Fuente Monoeespaciado
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//Definicion de margenes
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$PDF->SetHeaderMargin(PDF_MARGIN_HEADER);

//Saltos de linea inteligente por pagina
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTON);

//Definir la escala de la imagen
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//Fuente
$pdf->SetFont('times', '', 14);

//Agrega una pagina
$pdf->AddPage();

//Lo que imprimira

$html1 = '<h1 align="center">Ficha de Registro</h1>
          <hr>
          <p align="left">
          <br>
          </p>
          <p align="justify">
            Estimado(a) <strong>'.$name.'</strong> deberás presentar esta hoja
            impresa o en su defecto el codigo qr en imagen para poder acceder al
            evento.
          </p>
          <p align="right"></p>';

$htmlTab1 = '<table border="2" CELLPADDING="5" CELLSPACING="0">
            <tr align="justify">
              <td class="active" align="justify">
                <table CELPADDING="10">
                  <tr>
                    <td COLSPAN="2"><strong></strong></td>
                    <td COLSPAN="4"></td>
                  </tr>
                  <tr align="center">
                    <td COLSPAN="2"><strong>Nombre</strong></td>
                    <td COLSPAN="4">'.$name.'</td>
                  </tr>
                  <tr align="center">
                    <td COLSPAN="2"><strong>Correo</strong></td>
                    <td COLSPAN="4">'.$email.'</td>
                  </tr>
                  <tr>
                    <td COLSPAN="2"><strong></strong></td>
                    <td COLSPAN="4"></td>
                  </tr>
                  <tr>
                    <td COLSPAN="2"><strong></strong></td>
                    <td COLSPAN="4"></td>
                  </tr>
                </table>
             </td>
             <td class="active" align="center">
              <br>
              <img src="../../QRinvitados/'.$email'.png" />
             </td>
          </tr>';

$htmlTab2 = '</table>';

$htmlTab3 = '<hr>
                <div align="center">
                </div>';

//Para poder imprimirlo necesita datos en formato html
$html = $html1.'<br/>'.$htmlTab1.$htmlTab2.'<br/>'.$html3;

$pdf->writeHTML($html, true, false, true, false, '');

$NombreArchivo = 'FichaDeRegistro.pdf';

//Cierra y genera el output del pdf
$pdf->Output($NombreArchivo, 'I');


?>
