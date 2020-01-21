<?PHP
require_once 'conexion.php';
$nombre = $_REQUEST["nombre"];//recuperamos la foto que se manda
$foto = $_FILES["foto"]["name"];//estamos poniendo el nombre de la foto que se esta subiendo
//necesitamos una ruta
$ruta = $_FILES["foto"]["tmp_name"];//donde se esta capturando la foto
//necesitamos un destino
$destino ="imagenes/".$foto;//donde vamos a guardar las fotos en una carpeta fotos,concatenado con el nombre de la foto guardado en la variable foto
copy($ruta,$destino);//coiando la foto desde el inicio al destino
$conexion=mysqli_connect("localhost","root","","turismo");
mysqli_query($conexion, "INSERT INTO ciudades (nombre,foto) VALUES('$nombre','$destino')");
header("Location:viena.php");









?>