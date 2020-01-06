<?php 
include_once("settings/conexion.php");
include_once("static/lib/phpqrcode/qrlib.php");

$Nombre = $_POST['name'];
$ApellidoPaterno = $_POST['aPaterno'];
$ApellidoMaterno = $_POST['aMaterno'];
$Institucion = $_POST['institucion'];
$Puesto = $_POST['puesto'];
$Email = $_POST['email'];

//validacion para los 300 registros
$registros = mysql_query("SELECT id FROM Invitados");
$validacion = mysql_num_rows($registros);

if($validacion == 2)
{
    $solicitud = "INSERT INTO EnEspera (nombre,aPaterno,aMaterno,institucion,puesto,email,fecha ) value ('$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Institucion','$Puesto','$Email', NOW())";
    mysql_query($solicitud);
    
    header("Location:Solicitud.php");
    
}
else
{
    $filename = "QRInvitados/".$Email.".png";
    $tamCodeQR = 10;
    $CorectionError = "L";

    QRcode::png($Email, $filename, $CorectionError, $tamCodeQR, 2);


/*$UsuarioNuevo = "INSERT INTO Invitados (nombre,aPaterno,aMaterno,institucion,puesto,email ) value ('$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Institucion','$Puesto','$Email')";
mysql_query($UsuarioNuevo);*/

    $UsuarioNuevo = "INSERT INTO Invitados (nombre,aPaterno,aMaterno,institucion,puesto,email,qr,fecha ) value ('$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Institucion','$Puesto','$Email','$filename', NOW())";
    mysql_query($UsuarioNuevo);

//header("Location:InvitadoRegistrado.php?email=".$Email."&nombre=".$Nombre);
    header("Location:InvitadoRegistrado.php?name=".$Nombre."&aPaterno=".$ApellidoPaterno."&aMaterno=".$ApellidoMaterno."&Institucion=".$Institucion."puesto=".$Puesto."&email=".$Email);
}


?>
