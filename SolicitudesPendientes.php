<?php 

include_once('settings/conexion.php');

$SolicitudEnEspera = "SELECT * FROM EnEspera";
/*$Registrados = "SELECT Count(id) FROM Invitados;";*/
/*$Asistentes = "SELECT Count(*) FROM Invitados WHERE estado = 1;";*/
/*$Faltantes = "SELECT Count(*) FROM Invitados WHERE estado = 0;";*/

$res_Invitados = mysql_query($SolicitudEnEspera);
?>

<!DOCTYPE html>
<html class="bg-black">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="static/Trebol.ico" type="image/x-icon" />
  <title>Invitados</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">
</head>
<body class="bg-black">
  <h1 align="center">Solicitudes pendientes</h1>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="box-body table-responsive no-padding">
          <table class="table">
            <tbody>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Institucion</th>
                <th>Correo</th>
              </tr>
              <?php 
                $cont = 1;
                while($row_Invitado = mysql_fetch_assoc($res_Invitados)){
              ?>
              <tr>
                <td><?php echo $cont ?></td>
                <td><?php echo $row_Invitado['nombre']; ?></td>
                <td><?php echo $row_Invitado['institucion']; ?></td>
                <td><?php echo $row_Invitado['email']; ?></td>
                
              </tr>

              <?php 
                $cont = $cont + 1;
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
