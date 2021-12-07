<?php 

	$conexion=mysqli_connect('localhost','root','','mantenimiento');

 ?>


<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>Solicitud Datos Alumnos</title>
<link rel="shortcut icon" href="img/logo1.png">
</head>
<center>
<body>
<br>
	<h1>Historial de solicitudes</h1>
	<div id="mostrar"> 
	<table border="1" style="text-align: center;">
		<tr>
			<td>Id</td>
			<td>Usuario</td>
			<td>Domicilio</td>
			<td>Solicitud</td>
			<td>Fecha</td>
			<td>Descripción</td>
			<td>Asignación</td>
			<td>Estado</td>
		</tr>

		<?php 
		$sql="SELECT * from solicitud_cliente";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['usuario'] ?></td>
			<td><?php echo $mostrar['entrega'] ?></td>
			<td><?php echo $mostrar['solicitud'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['asignacion'] ?></td>
			<td><?php echo $mostrar['estado'] ?></td>

			<!-- <td><a href="https://mail.google.com"><div align="center"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Gmail_Icon.svg/1200px-Gmail_Icon.svg.png" height="40" width="40"></div></a></td> -->
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
<br><br>
<button type="button" onclick="javascript:imprim2();">Imprimir Documento</button>
<br><br>
<input type="button" onclick="history.back()" name="Regresar" value="Regresar">
</body>
</center>
<script>
function imprim2(){
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write('<html><head>');
	mywindow.document.write('<style>.tabla{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}.tabla th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}.tabla td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById('mostrar').innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.document.close(); // necesario para IE >= 10
    mywindow.focus(); // necesario para IE >= 10
    mywindow.print();
    mywindow.close();
    return true;}
</script> 
</html>