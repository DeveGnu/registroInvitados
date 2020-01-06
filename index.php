<!DOCTYPE html>

<html class="bg-black">

<head>

  <meta charset="UTF-8">
  <title>Registro de invitados</title>
  <link rel="shortcut icon" href="static/Trebol.ico" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">

</head>

<body class="bg-black">

  <div class="form-box" id="login-box">
    <div class="header">Registro de invitados</div>
    <form action="RegistrarInvitados.php" method="post">
      <div class="body bg-gray">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Nombre(s)"/>
        </div>
        <div class="form-group">
          <input type="text" name="aPaterno" class="form-control" placeholder="Apellido Paterno"/>
        </div>
        <div class="form-group">
          <input type="text" name="aMaterno" class="form-control" placeholder="Apellido Materno"/>
        </div>
        <div class="form-group">
          <input type="text" name="institucion" class="form-control" placeholder="Institución"/>
        </div>
        <div class="form-group">
          <input type="text" name="puesto" class="form-control" placeholder="Puesto"/>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email"/>
        </div>
      </div>
      <div class="footer">
        <button id="BtnRegistrar" type="submit" class="btn bg-olive btn-block" style = "color:white !important;">Registrar</button>
      </div>
    </form>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>

