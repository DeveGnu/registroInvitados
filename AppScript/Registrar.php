<?php 

require_once("settings/conexion.php");

$Email = $_POST['email'];

$Consulta = "SELECT nombre FROM Invitados WHERE email = '$Email'";

$res_Consulta = mysql_query($Consulta);
$row_Consulta = mysql_fetch_assoc($res_Consulta);

if (!is_null($row_Consulta['nombre']))
{
  $data = array('Rpta' => 1, 'nombre' => $row_Consulta['nombre']);
  print(json_encode($data));

  $Registrado = "UPDATE Invitados SET estado = 1 WHERE email = '$Email'";
  mysql_query($Registrado);
}
else
{
  $data = array('Rpta' => 0);
  print(json_encode($data));
}

?>
