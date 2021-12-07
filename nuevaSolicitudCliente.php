<?php
    if(!isset($_POST["usuario"]) || !isset($_POST["entrega"])  || !isset($_POST["solicitud"]) 
    || !isset($_POST["metodopago"]) || !isset($_POST["fecha"]) || !isset($_POST["descripcion"]))
    exit();

include_once "base_de_datos.php";
$user = $_POST["usuario"];
$domi = $_POST["entrega"];
$soli = $_POST["solicitud"];
$mpago = $_POST["metodopago"];
$date = $_POST["fecha"];
$descripcion= $_POST["descripcion"];
$sentencia = $base_de_datos->prepare("INSERT INTO solicitud_cliente (usuario, entrega, solicitud, metodopago, fecha, descripcion) VALUES(?,?,?,?,?,?);");
$resultado = $sentencia->execute([$user, $domi, $soli, $metopago, $date, $descripcion]);

if($resultado === TRUE) 
header("Refresh:0; url=formulariocliente.php");
else
echo "<h2>Algo salio mal, contactanos para solucionar tu problema</h2>";
?>
<html>
<link rel="shortcut icon" href="img/logo1.png">
    <style type="text/css">
    h2 {
    color: white;
}
    </style>
          <meta charset="utf-8"/>
<body style="background-color:#55adff;">

<form action="formulariocliente.php">
       
    </form>
  
    </body>
</html>