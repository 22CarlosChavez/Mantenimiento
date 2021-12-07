<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("Refresh:0; url=admin.html");
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
echo "<td> <input type='submit' name='Submit' value='Home'/><a href='admin.html'>Su sesion ha terminado.</td>";

exit;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head> 
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <link rel="shortcut icon" href="img/logo1.png">
          <meta charset="utf-8"/>
         <style type="text/css"> .centerDiv { width: 31%; height:510px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;text-align:center;} 
        
             .center{text-align: center;}
        </style> 
        <title>Registro de Administradores</title>
        <style>
    .input-group {
      margin: 10 auto;
      margin-top: 10px;
    }
    span {
      cursor: pointer;
    }
  </style>
    <script>
    $(document).on('ready', function() {
      $('#show-hide-passwd').on('click', function(e) {
        e.preventDefault();

        var current = $(this).attr('action');

        if (current == 'hide') {
          $(this).prev().attr('type','text');
          $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
        }

        if (current == 'show') {
          $(this).prev().attr('type','password');
          $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
      
        }
      })
    })
    
  </script>
    </head>
<body style="background-color:#2c3e50;">
     <div style="width: 31%; margin: 0 auto; border:1px solid lightblue; background-color:#1a68b0; font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;color:white;">
    <h1 class="center">Registrar Admin</h1>
    </div>
<div div class="centerDiv">
    <form method="POST" action="registrar_admin.php">
        <img src="img/adminnuevo.jpg" height="150" width="200">
        <br>
  
        <br>
        <input name="administrador" required type="text" placeholder="&#128272;  Usuario..." maxlength="25" size="52" style="height: 30px;">
        <br>
        <br>
      
  <div class="input-group">
        <input name="password" required type="password" id="password" placeholder="&#128272;  Contraseña..." maxlength="25" size="45" style="height: 30px;">
        <span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>
  </div>
      <br>

        <br><input type="submit" value="Registrar" style=" border-radius: 5px; padding: 10px 30px; width:80%;background-color:#1a68b0;color: white;">
         <br><br><div class="alert alert-warning" style="height: 40px;">¡No olvides ingresar los datos correctamente!</div>
  
    </form>
     <form action="menu_admin.php">    
  <input type="submit" value="Home" style=" border-radius: 5px; padding: 10px 30px; width:30%;background-color:#1a68b0;color: white;float:right;"/>
        </form>
    </div>
    </body>
    </html>