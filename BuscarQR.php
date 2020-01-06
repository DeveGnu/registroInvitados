<!DOCTYPE html>

<html class="bg-black">

<head>

  <meta charset="UTF-8">
  <title>Buscar QR</title>
  <link rel="shortcut icon" href="static/Trebol.ico" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">

</head>

<body class="bg-black">

  <div class="form-box" id="login-box">
    <div class="header">Por favor ingrese el correo para poder buscar el código QR</div>
    <form action="EncontrarQR.php" method="post">
      <div class="body bg-gray">
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Correo"/>
        </div>
      </div>
      <div class="footer">
        <button type="submit" class="btn bg-olive btn-block" style = "color:white !important;">Buscar QR</button>
      </div>
    </form>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>

