<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   header("Refresh:0; url=admin.html");
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

 header("Refresh:0; url=admin.html");
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
    <link rel="shortcut icon" href="img/logo1.png">
<title>Solicitudes Asignadas</title>
<style>
    table,th,td{
        border: 1px solid black;
    }
    .centerDiv { width: 70%; height:450px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;text-align:center;} 
        
             .center{text-align: center;}
</style>
</head>
<body style="background-color:#55adff;">
     <div style="width: 70%; margin: 0 auto; border:1px solid lightblue; background-color:#1a68b0; font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;color:white;">
    <h1 class="center">Lista de Solicitudes</h1>
    </div>
    <div style="width: 70%; height:auto; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;font-size:15px;">
  <table>
    <thead>
     <tr>
     <th>Id</th>
     <th>Usuario</th>
     <th>Entrega</th>
     <th>Solicitud</th>
     <th>Método de pago</th>
     <th>Fecha</th>
     <th>Descripcion</th>
     <th>Asignacion</th>
     <th>Estado</th>
     <th>Editar</th>
     <th>Eliminar</th>
     </tr>  
    </thead>
    <tbody>
    
<?php foreach($solicitudes as $solicitud){ ?>
        <tr>
        <td><?php echo $solicitud->id ?></td>
        <td><?php echo $solicitud->usuario ?></td>
        <td><?php echo $solicitud->entrega ?></td>
        <td><?php echo $solicitud->solicitud ?></td>
        <td><?php echo $solicitud->metodopago ?></td>
        <td><?php echo $solicitud->fecha ?></td>
        <td><?php echo $solicitud->descripcion ?></td>
        <td><?php echo $solicitud->asignacion ?></td>
        <td><?php echo $solicitud->estado ?></td>
        <td><a href="<?php echo "editar.php?id=" . $solicitud->id?>"><div align="center"><img src="img/asignar.png" height="40" width="40"></div></a></td> 
        <td><a href="<?php echo "eliminar_solicitud_cliente.php?id=" . $solicitud->id?>"><div align="center"><img src="img/borrar.png" height="40" width="40"></div></a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
        <br>
        <form action="menu_admin.php">    
  <input type="submit" value="Home" style=" border-radius: 5px; padding: 10px 30px; width:30%;background-color:#1a68b0;color: white;float:right;"/>
        </form>
    </div>
</body>
</html>
