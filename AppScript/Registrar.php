<?php 

require_once("settings/conexion.php");

$Email = $_POST['email'];

$Consulta = "SELECT id,nombre FROM Invitados WHERE email = '$Email'";

$res_Consulta = mysql_query($Consulta);
$row_Consulta = mysql_fetch_assoc($res_Consulta);

  //esta es la respuesta que obtenemos
  $data = array('Rpta' => 1, 'nombre' => $row_Consulta['nombre']);
  print(json_encode($data));
  //esta es la consulta para actualizar el estado del acreditado
  $Acreditado = "UPDATE Invitados SET estado = 1 WHERE email = '$Email'";
  mysql_query($Acreditado);


/*
else 
{
  $data = array('Rpta' => 0 );
  print (json_encode($data));
}
*/

?>
