<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM solicitud_cliente WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) 
 header("refresh:0; url=lista_clientes.php");
else
echo "<h2>Algo salio mal, verfica con el encargado de sistemas</h2>";
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
<title>Lista de Solicitudes Admin</title>
<form action="listarSolicitudesadmin.php">
       
        
    </form>
  
    </body>
</html>
