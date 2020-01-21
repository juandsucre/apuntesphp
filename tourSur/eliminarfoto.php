<?php
$nombre = $_POST["nombre"];
require("conexion.php");
$conexion = mysqli_connect("$db_host","$db_usuario", "$db_contra", "$db_nombre");
mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");
$consulta = "DELETE FROM fotos where nombre = '$nombre'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado == false){
    echo("ERROR EN LA CONSULTA");
}else
{
    if (mysqli_affected_rows($conexion) == 0 )
    {
        echo "<br> No existen registros a eliminar con este nombre". $nombre; 

    }
    else if (mysqli_affected_rows($conexion) == 1)
    {
        echo "<br> Se ha eliminado ".mysqli_affected_rows($conexion)."registros" .$nombre;
    }
}
mysqli_close($conexion);
?>
<a href="cargar_fotos.php"> <button>Volver a intentar</button></a>