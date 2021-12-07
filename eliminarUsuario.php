<?php
if(!isset($_GET["id"])) exit();
$ID = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM clientes WHERE id = ?;");
$resultado = $sentencia->execute([$ID]);
if($resultado === TRUE) 
echo  header("refresh:0; url=lista_clientes.php");
else
echo "<h2>Algo salio mal, verifica con el encargado de sistemas</h2>";
?>
<html>
    <style type="text/css">
    h2 {
    color: white;
}
    </style>
          <meta charset="utf-8"/>
<body style="background-color:#2c3e50;">
<link rel="shortcut icon" href="img/logo1.png">

</html>
