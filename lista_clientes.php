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
$sentencia = $base_de_datos->query("SELECT * FROM clientes;");
$solicitudes = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="img/logo1.png">
<title>Usuarios Registrados</title>
<style>
    table,th,td{
        border: 1px solid black;
    }
    .centerDiv { width: 50%; height:450px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;text-align:center;} 
        
             .center{text-align: center;}
</style>
</head>
<body style="background-color:#2c3e50;">
     <div style="width: 80%; margin: 0 auto; border:1px solid lightblue; background-color:#1a68b0; font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;color:white;">
    <h1 class="center">Lista de usuarios registrados</h1>
    </div>
    <div style="width: 80%; height:auto; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;font-size:20px;">
  <table align="center";>
    <thead>
     <tr>
     <th>ID</th>
     <th>Nombre</th>
     <th>Contraseña</th>
     <th>Telefono</th>
     <th>Correo</th>
     <th>Domicilio</th>
     <th>R.F.C.</th>
     <th>Eliminar</th>
     </tr>  
    </thead>
    <tbody>
    
<?php foreach($solicitudes as $solicitud){ ?>
        <tr>
        <td><?php echo $solicitud->id?></td>
        <td><?php echo $solicitud->nombrec ?></td>
        <td><?php echo $solicitud->password ?></td>
        <td><?php echo $solicitud->phone?></td>
        <td><?php echo $solicitud->email ?></td>
        <td><?php echo $solicitud->domicilio?></td>
        <td><?php echo $solicitud->rfc?></td>
                 <td><a href="<?php echo "eliminarUsuario.php?id=" . $solicitud->id?>"><div align="center"><img src="img/borrar.png" height="40" width="40"></div>
                </a></td>
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
