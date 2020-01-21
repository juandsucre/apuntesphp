<?php
if(isset($_POST['borrar']))
 
{

$nom=$_POST["nombre"];
$foto=$_POST["foto"];
require("conexion.php");
   
$conexion = mysqli_connect("$db_host", "$db_usuario", "$db_contra");
if(mysqli_connect_errno()){
    echo "Falló al conectar a la base de datos";
        exit();
    
}
mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la Base de Datos");
mysqli_set_charset($conexion, "utf8");

//$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);




$consulta="DELETE FROM ciudades WHERE foto='%$foto%'";
$resultados=mysqli_query($conexion, $consulta);
//le estoy diceindo que haga un bucle constante y compuebe la tabla virtual
if($resultados==false){
    echo "Error en la consulta";
} else{
    
    if(mysqli_affected_rows($conexion)==0){
        echo "No existen registros a eliminar con ese criterio";
    }else if(mysqli_affected_rows($conexion)==1){
        echo "Se ha eliminado ". mysqli_affected_rows($conexion). " registro";
    
        
    } else{
        echo "Se han eliminado ". mysqli_affected_rows($conexion). " registros";
    
   //echo "Registro eliminado";
    
    //hasta aqui bien lo unico que si vuelvo a intentarlo a eliminar vuelve a repetir eliminado a pesar que no existe
    //echo mysqli_affected_rows($conexion);
}
}

mysqli_close($conexion);
}

