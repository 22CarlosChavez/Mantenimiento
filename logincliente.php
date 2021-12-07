<?php
session_start();
?>
<?php
$username=$_POST['email'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost", "root", "", "mantenimiento");
$consulta="SELECT * FROM clientes WHERE email='$username' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
if($username==TRUE){
echo "Bienvenido Cliente! " . $_SESSION['email'];
    header("location:menu_cliente.php");
}
    // else{
    //     echo "Bienvenido Cliente! " . $_SESSION['username'];
    //     header("location:menu_cliente.php");
    // }
    
}
else{

   header("Refresh:0; url=cliente.html");

}
mysqli_free_result($resultado);
mysqli_close($conexion);