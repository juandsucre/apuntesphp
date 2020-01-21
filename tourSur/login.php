<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$_SESSION['usuario']=$usuario;
require('conexion.php');
$conexion = mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre");
mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");
$consulta  ="Select * from operadores where usuario = '$usuario' && clave = '$clave'"; 
$resultado = mysqli_query($conexion,$consulta);
if(mysqli_num_rows($resultado)>0){
    header("Location:viena.php");
}else{
    echo '<script>alert("Error en la autentificación");
    window.location.replace("registrarse.html");</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>