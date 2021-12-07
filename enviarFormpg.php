<?php
	if(!isset($_POST["nombrec"]) || !isset($_POST["phone"]) 
	|| !isset($_POST["email"])  || !isset($_POST["password"]) 
	|| !isset($_POST["domicilio"])
	|| !isset($_POST["dia"]) || !isset($_POST["mes"])
	|| !isset($_POST["anio"]) || !isset($_POST["rfc"])
	|| !isset($_POST["ciudad"]) || !isset($_POST["estado"]))
	exit();

include_once "base_de_datos.php";
$nombrec= $_POST["nombrec"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$pass = $_POST["password"];
$domic= $_POST["domicilio"];
$dia= $_POST["dia"]; 
$mes= $_POST["mes"];
$anio= $_POST["anio"];
$rfc= $_POST["rfc"];
$ciudad = $_POST["ciudad"];
$estado = $_POST["estado"];
$sentencia = $base_de_datos->prepare("INSERT INTO clientes (nombrec
,phone,email,password,domicilio,dia,mes,anio,rfc,ciudad,estado) VALUES(?,?,?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$nombrec,$phone,$email,$pass,$domic,$dia,$mes,$anio,$rfc,$ciudad,$estado]);

if($resultado === TRUE) 
header("Refresh:0; url=form_pg.html");     
else
echo "<h2>Algo salio mal, llama a nuestros servicios para notificar lo sucedido.</h2>";
?>
