<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

}else {
 
 header("Refresh:0; url=admin.html");
exit;
 }
$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

 header("Refresh:0; url=admin.html");
exit;
}?>
<!DOCTYPE html>
<html>
<head>
<title>MENU ADMIN</title>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    </head>
    <link rel="shortcut icon" href="img/logo1.png">
   
      <body style="background-color:#2c3e50;">
        <br>        
     <div style="
     width: 78%; 
     height:550px;  
     margin: 0 auto; 
     border:1px solid white;
     background-color:  white ;
     font-family: Arial;
     padding: 10px;
    text-align:center;
    box-shadow: 1px 1px 5px #000;
    font-size:32px;">

         <?php echo "Bienvenido " .$_SESSION['administrador'];?>
         <br><br><br>
         <img src="img/logo1.png">
    </div>
    <header>   
        <section id="menu" >
        <ul>
        <a href="nuevo_admin.php">Registrar Admin</a>
        <a href="lista_clientes.php">Usuarios</a>              
        <a href="solicitud_lista_cliente.php">Estado de Solicitud</a>
        <a href="datos_solicitudes.php">Historial de Solicitudes</a>
        <a href="logout.php">Cerrar Sesion</a>
        </ul>
        </section>
        </header>
    </body>
</html>