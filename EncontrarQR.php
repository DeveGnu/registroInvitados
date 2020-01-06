<?php
$QR = $_POST['email'];
?>

<!DOCTYPE html>
<html class="bg-black">
<head>
  <meta charset="UTF-8">
  <title>Código QR</title>
  <link rel="shortcut icon" href="static/Trebol.ico" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">
</head>
<body class="bg-black">
  <div class="form-box" id="login-box">
    <div class="header">Código QR localizado</div>
    <div class="body bg-gray" align="center">
        <img src="QRInvitados/<?php echo "$QR"?>.png" width="300" heigth="300"';>
    </div>
    <div class="footer">
        <!--<a href="tcpdf/Generador/FichaDeRegistro.php?email=<?php echo $_POST['email']."&nombre=". $_POST['name'];?>" target="_blank"><button class="btn btn-succes$-->
        <br>
        <br>
        <a href="BuscarQR.php"> <button class = "btn btn-success btn-block">Regresar</button></a>
        <hr>
    </div>

  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
