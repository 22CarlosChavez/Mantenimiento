<?php
if(!isset($_POST["administrador"]) || !isset($_POST["password"])) exit();

include_once "base_de_datos.php";
$username= $_POST["administrador"];
$password= $_POST["password"];

$sentencia = $base_de_datos->prepare("INSERT INTO administradores (administrador, password) VALUES(?,?);");
$resultado = $sentencia->execute([$username, $password]);

if($resultado === TRUE) 
header("Refresh:0; url=nuevo_admin.php");     
else
echo "<h2>Algo salio mal, conectate con el encargado de sistemas</h2>";
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
  		
    </body>
</html>