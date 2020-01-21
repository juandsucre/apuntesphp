<?php
include "conexion.php";

$conexion=mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre")or die("Falla la conexion");
$nombre=$_POST['nombre'];
$monto=$_POST['monto'];

mysqli_set_charset($conexion,"utf8");
$insertar= "INSERT INTO ventas(nombre,ventas) values ('$nombre','$monto')";
$resultado=mysqli_query($conexion,$insertar) or die("Falla la consulta");

    echo"SE HAN INSERTADO LOS DATOS";

mysqli_close($conexion);
?>