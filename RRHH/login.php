<?php
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$_SESSION['usuario'] = $usuario;

require("conexion.php");

$conexion = mysqli_connect("$servidor", "$user", "$clavee","$DB");

mysqli_select_db($conexion,$DB) or die ("NO SE ENCUENTRA LA BASE DE DATOS");
$consulta = "SELECT * FROM empleados where usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas > 0)
{
    header("location:bienvenida.html");

}else
{
    echo "<script> alert('ERROR EN LA AUTENTIFICACION') </script>";
    header("Location:index.html");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>