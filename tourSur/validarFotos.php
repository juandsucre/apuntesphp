<?php
require('conexion.php');
$nombre = $_REQUEST['nombre'];
$foto = $_FILES['foto']['name'];
$ruta = $_FILES['foto']['tmp_name'];
$destino = "imagenes/".$foto;
copy($ruta,$destino);
$conexion=mysqli_connect("localhost","root","","turisur");
mysqli_query($conexion,"Insert into fotos(nombre,foto) values ('$nombre','$destino')");
mysqli_close($conexion);
header("Location:cargar_fotos.php");
echo "Foto subida correctamente";
?>