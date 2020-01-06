<!DOCTYPE html>

<html class="bg-black">

<head>

  <meta charset="UTF-8">
  <title>Redecyt</title>
  <link rel="shortcut icon" href="static/Trebol.ico" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">

</head>

<body class="bg-black">

  <div class="form-box" id="login-box" style = "width: 360px !important;">
    <!--<img src="static/imagenes/banner363x50.png" width="300">-->
    <div class="header" style = "font-size: 30px; color: black; box-shadow: inset 0px -3px 0px rgb(19, 176, 76); !important;">Registro de invitados
    </div>
    <form action="RegistrarInvitados.php" method="post">
      <div class="body bg-gray">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Nombre(s)" required/>
        </div>
        <div class="form-group">
          <input type="text" name="aPaterno" class="form-control" placeholder="Apellido Paterno" required/>
        </div>
        <div class="form-group">
          <input type="text" name="aMaterno" class="form-control" placeholder="Apellido Materno" required/>
        </div>
        <div class="form-group">
          <input type="text" name="institucion" class="form-control" placeholder="Institución" required/>
        </div>
        <div class="form-group">
          <input type="text" name="puesto" class="form-control" placeholder="Puesto" required/>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email" required/>
        </div>
      </div>
      <!--Terminos y condiciones-->
      <div class="col-xs-10">
        <div class="checkbox icheck">
          <label>
            <input type="checkbox" name="check" required> Acepto los <a href="Terminos.php">términos y condiciones</a>
          </label>
        </div>
      </div>
      <!-- Contador -->
      <script language="JavaScript">
            TargetDate = "05/18/2018 5:00 PM/PM UTC+0100";
            BackColor = "#d5d7dc";
            ForeColor = "black";
            CountActive = true;
            CountStepper = -1;
            LeadingZero = true;
            DisplayFormat = "%%D%% Días, %%H%% Horas, %%M%% Minutos, %%S%% Segundos.";
            FinishMessage = "Ha iniciado el evento";
      </script>
      
      <div class="footer">
        <button id="BtnRegistrar" type="submit" class="btn bg-olive btn-block" style = "color:white !important;">Registrar</button>
      </div>
      
    </form>
    
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
  <script language="JavaScript" src="countdown.js"></script>

</body>

</html>

