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
     <div style="width: 78%; height:1000px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    text-align:center;box-shadow: 1px 1px 5px #000;font-size:32px;">
         <br>
      <p>Método de pago Paypal</p>
      <br>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="XN893DFKMTK2W">
        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
      </form>
          <br>
            <hr>
      <br>
        <p>Método de pago transferencia</p>
          <br>
            <img src="img/clabeinter.jpg" width="400" height="380">
          <br><br>
            <hr>
      <br>
      <p>Método de pago efectivo o cheque</p>
          <br>
            <p>Si usted eligio este método tiene que pasar cuando el tecnico visite a su local u hogar.</p>
          <br>
            <hr>
      <br>

    </div>
    <header>
    <section id="menu">
        <ul>
        <a href="formulariocliente.php">Nueva Solicitud</a>
        <a href="metodopago.html">Método de Pago</a>
        <a href="estado_solicitud_cliente.php">Estado de Solicitudes</a>
        <a href="logoutcliente.php">Cerrar Sesion</a>
        </ul>
        </section>
    </header>
    </body>
</html>