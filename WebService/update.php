<?php

include_once('../settings/conexion.php');


$Email = $_GET['email'];


$asistencia = "UPDATE Invitados SET estado = 1 WHERE email ='$Email'";

mysql_query($asistencia) or die (mysql_error());
?>

