<?php
include_once("settings/conexion.php");

$Correo = $_POST['email'];


$Asistencia = "UPDATE Invitados SET estado = 1 WHERE email = '$Correo';";
mysql_query($Asistencia);

//header("Location:ConfirmarAsistencia.php");

$Persona = "SELECT COUNT(*) FROM Invitados WHERE email = '$Correo'";
mysql_query($Persona);

if ($Persona == 0)
{
        header("Location:ErrorCorreo.php");
        //header("Location:ConfirmarAsistencia.php");
}
if($Persona == 1)
{
    //lo manda al reves por eso lo comente
	header("Location:ConfirmarAsistencia.php");
	//header("Location:ErrorCorreo.php");
}

?>
