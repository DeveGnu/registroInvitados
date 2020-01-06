<?php
include_once("settings/conexion.php");

$Correo = $_POST['email'];


$Asistencia = "UPDATE Invitados SET estado = 1 WHERE email = '$Correo';";
mysql_query($Asistencia);

//header("Location:ConfirmarAsistencia.php");

$Persona = "SELECT * FROM Invitados WHERE email = '$Correo'";
mysql_query($Persona);

if (mysql_num_rows($Persona) == 0)
{
	/*echo '<script type="text/javascript">
		alert("El correo no ha sido registrado en el sistema");</script>
	';*/
        header("Location:ErrorCorreo.php");
}
else
{
	header("Location:ConfirmarAsistencia.php");
}


?>
