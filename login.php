<?php
session_start();
?>
<?php
$username=$_POST['administrador'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost", "root", "", "mantenimiento");
$consulta="SELECT * FROM administradores WHERE administrador='$username' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    $_SESSION['loggedin'] = true;
    $_SESSION['administrador'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
if($username==TRUE){
echo "Bienvenido Administrador! " . $_SESSION['administrador'];
    header("location:menu_admin.php");
}
}
else{
    header("Refresh:0; url=registro.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);