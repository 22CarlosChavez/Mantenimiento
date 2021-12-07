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
<html lang="es">
<head>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<meta charset="utf-8"/>
<link rel="shortcut icon" href="img/logo1.png">

     <style type="text/css"> .centerDiv { width: 30%; height:500px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;text-align:center;} 
        
             .center{text-align: center;}
        </style> 
    <title>Nueva Solicitud</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximus-scale=1, minium- sacale=1">
<body style="background-color:#55adff;">

 <div style="width: 60%; margin: 0 auto; border:1px solid lightblue; background-color:#1a68b0; font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;color:white;">
    <h1 class="center">Solicitud Cliente</h1>
    </div>
<div style="width: 60%; height:570px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;font-size:16px;">
    <section style="width:60%;margin-left:200;">
<form method="POST" action="nuevaSolicitudCliente.php">
<fieldset>
    <legend>Solicitud</legend>
    <label>Usuario</label>
    <input name="usuario" value="<?php echo $_SESSION['email']; ?>" style="width: 150px; height:22px; ">
    <br><br>
    <label>Domicilio</label>
    <input type="text" name="entrega" required placeholder="Entrega/Domicilio">
    <br><br>
    <label>Tipo de Solicitud</label>
     <select name="solicitud" required>
        <option disabled selected value="0">Selecciona</option>
        <option value="Preventivo">Preventivo Interno o Externo</option>
        <option value="Correctivo">Mantenimiento Correctivo</option>     
      </select>
    <br><br>
    <label>Metodo de Pago</label>
     <select name="solicitud" required>
        <option disabled selected value="0">Selecciona</option>
        <option value="paypal">Paypal</option>
        <option value="transferencia">Transferencia</option>
        <option value="cheque">Cheque</option>
        <option value="efectivo">Efectivo</option>     
      </select>
    <br><br>
    <label>Fecha de elaboracion:</label>
    <br>
    <input type="date" name="fecha" id="fecha"><br><br>
    <label>Descripcion del servicio solicitado o falla a reparar:</label><br>    
    <textarea name="descripcion" rows="10" cols="40" placeholder="Especifique su problema en max: 100 caracteres"></textarea>
</fieldset>
<br>
    <input type="submit" value="Enviar" style=" border-radius: 5px; padding: 10px 30px; width:30%;background-color:#1a68b0;color: white;">
</form>
    <form action="menu_cliente.php">    
     <input type="submit" value="Home" style=" border-radius: 5px; padding: 10px 30px; width:30%;background-color:#1a68b0;color: white;float:right;"/>
    </form>
   
    </section>
</div>

</body>
</html>