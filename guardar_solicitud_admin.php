<?php
if(
    !isset($_POST["asignacion"])||
    !isset($_POST["estado"])||
    !isset($_POST["id"])
    )exit();
include_once "base_de_datos.php";
$id = $_POST["id"];
$asignacion = $_POST["asignacion"];
$estado = $_POST["estado"];
$sentencia = $base_de_datos->prepare("UPDATE solicitud_cliente SET asignacion = ?, estado = ? WHERE id = ?;");
$resultado = $sentencia->execute([$asignacion, $estado, $id]);
if($resultado === TRUE){ 
header("refresh:0; url=solicitud_lista_cliente.php");
include("api.php");
send_notification($asignacion);
}
else{
echo "<h2>Algo salio mal, verifica que la tabla exista</h2>";}
?>
<html>
    <style type="text/css">
    h2 {
    color: white;
}
    </style>
          <meta charset="utf-8"/>
<body style="background-color:#55adff;">
<link rel="shortcut icon" href="img/logo1.png">
<title>Solicitudes</title>
<form action="solicitud_lista_cliente.php">
</form>
</body>
</html>
