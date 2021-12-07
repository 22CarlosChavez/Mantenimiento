<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
header("Refresh:0; url=cliente.html");
exit;

}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

header("Refresh:0; url=cliente.html");
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>MENU CLIENTE</title>
<link rel="stylesheet" href="really-simple-jquery-dialog.css">
<link rel="shortcut icon" href="img/logo1.png">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    </head>
      <body style="background-color:#55adff;">
        <br>
     <div style="width: 78%; height:550px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    text-align:center;box-shadow: 1px 1px 5px #000;font-size:32px;">
          <?php echo "Bienvenido " .$_SESSION['email'];?>
         <br><br><br>
        <img src="img/logo1.png">
    </div>
    <header>
    <section id="menu">
        <ul>
        <a href="formulariocliente.php">Nueva Solicitud</a>
        <a href="metodopago.php">Método de Pago</a>
        <a href="estado_solicitud_cliente.php">Estado de Solicitudes</a>
        <a href="logoutcliente.php">Cerrar Sesion</a>
        </ul>
        </section>
    </header>
    </body>
</html>