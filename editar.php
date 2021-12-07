<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM solicitud_cliente WHERE id = ?;");
$sentencia->execute([$id]);
$solicitud = $sentencia->fetch(PDO::FETCH_OBJ);
if($solicitud === FALSE){
	echo "¡No existe alguna solicitud con ese ID!";
	exit();
}
?>
<!DOCTYPE html>
<html lang="utf-8">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/logo1.png">
    <style type="text/css"> .centerDiv { width: 30%; height:450px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;text-align:center;} 
        
             .center{text-align: center;}
        </style> 
	<title>Editar Solicitudes</title>
</head>
<body style="background-color:#55adff;">
     <div style="width: 40%; margin: 0 auto; border:1px solid lightblue; background-color:#1a68b0; font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;color:white;">
    <h1 class="center">Solicitud</h1>
    </div>
    <div style="width: 40%; height:599px; margin: 0 auto; border:1px solid white;background-color:white;font-family: Arial;padding: 10px;
    box-shadow: 1px 1px 5px #000;font-size:16px;">
    <section style="width:40%;margin-left:200;">
<form method="post" action="guardar_solicitud_admin.php">
    <input type="hidden" name="id" value="<?php echo $solicitud->id; ?>">
    <label>Tipo de Solicitud</label>
    <select disabled name="solicitud" required>
    <option <?php echo $solicitud->solicitud=== "preventivo" ? "selected='selected'": "" ?>value="preventivo">Preventivo</option>
    <option <?php echo $solicitud->solicitud=== "correctivo" ? "selected='selected'": "" ?> value="correctivo">Correctivo</option>
    </select>
    <br><br>
    <label for="nombre">Nombre del solicitante</label><br>
        <input disabled  value="<?php echo $solicitud->usuario ?>" name="usuario" requiered >
        <br><br>
    <label for="area">Entrega:</label><br>
		<input  value="<?php echo $solicitud->entrega ?>" name="entrega" requiered placeholder="Entrega" size="60">
		<br><br>
        <label for="fecha">Fecha de elaboracion:</label><br>
		<input  value="<?php echo $solicitud->fecha ?>" name="fecha" requiered type="date" id="fecha">
		<br><br>
        <label for="asignacion">Persona asignada</label><br>
	<select  name="asignacion" required id="asignacion">
        <option value="#">--Selecciona</option>
        <option <?php echo $solicitud->asignacion === "Carlos Alberto" ? "selected='selected'": ""?>value="Carlos Alberto">Carlos Chávez</option>
         <option <?php echo $solicitud->asignacion === "Andres Rubio" ? "selected='selected'": ""?>value="Andres Rubio">Andres Rivera</option>
          <option <?php echo $solicitud->asignacion === "Lucio Reyes" ? "selected='selected'": ""?>value="Lucio Reyes">Lucio Sebastian</option>
    </select>
		<br><br>
        <label for="estado">Estado de la solicitud:</label><br>
	    <select name="estado" required id="estado">
        <option value="#">--Selecciona--</option>
        <option <?php echo $solicitud->estado=== "En proceso" ? "selected='selected'": "" ?>value="En proceso">En proceso</option>
        <option <?php echo $solicitud->estado=== "Terminado" ? "selected='selected'": "" ?> value="Terminado">Terminado</option>
        </select>
        <br><br>
        <label for="descripcion">Descripcion del servicio solicitado o falla a reparar:</label><br>
		<textarea disabled  name="descripcion" requiered type="text" id="descripcion" rows="10" cols="40"><?php echo $solicitud->descripcion ?></textarea>
        <br><br>
		<input type="submit" value="Guardar" align="center" style=" border-radius: 5px; padding: 10px 30px; width:50%;background-color:#1a68b0;color: white; float: center;">
        <br>
</form>
   <!-- <form action="menu_admin.php">    
  <input type="submit" value="Home" style=" border-radius: 5px; padding: 10px 30px; width:50%;background-color:#1a68b0;color: white;float:right;"/>
        </form> -->
        </section>
        </div>
</body>
</html>