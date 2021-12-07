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
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM solicitud_cliente;");
$solicitudes = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
<title>Solicitudes</title>
<link rel="shortcut icon" href="img/logo1.png">
<style>
    table,th,td{
        border: 1px solid black;
    }
    .centerDiv { width: 30%; height:500px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;text-align:center;} 
        
             .center{text-align: center;}
</style>
</head>
<body style="background-color:#55adff;">
     <div style="width: 50%; margin: 0 auto; border:1px solid lightblue; background-color:#1a68b0; font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;color:white;">
    <h1 class="center">Lista de Solicitudes</h1>
    </div>
    <div style="width: 50%; height:auto; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;font-size:15px;">

  <table >
    <thead>
     <tr> 
     <th>Usuario</th>
     <th>Solicitud</th>
     <th>Método de pago</th>
     <th>Fecha</th>
     <th>Descripcion</th>
     <th>Asignacion</th>
     <th>Estado</th>
     </tr>  
    </thead>
    <tbody> 
<?php foreach($solicitudes as $solicitud){ ?>
        <tr>
        <td><?php echo $solicitud->usuario ?></td>
        <td><?php echo $solicitud->solicitud?></td>
        <td><?php echo $solicitud->metodopago?></td>
        <td><?php echo $solicitud->fecha ?></td>
        <td><?php echo $solicitud->descripcion ?></td>
        <td><?php echo $solicitud->asignacion ?></td>
        <td><?php echo $solicitud->estado ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
        <br>
        <form action="menu_cliente.php"> 
         
  <input type="submit" value="Home" style=" border-radius: 5px; padding: 10px 30px; width:30%;background-color:#1a68b0;color: white;float:right;"/>
        </form>
    </div>

</body>
</html>
