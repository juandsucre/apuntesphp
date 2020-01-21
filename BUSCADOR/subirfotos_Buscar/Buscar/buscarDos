<!DOCTYPE html>
<html lang="ES">
<head>
 <meta charset="UTF-8">
 <title>información de productos</title>
 <style>
 table {
           width:80%;
           border:1px double #000;
            margin: auto;
            text-align: center;
           
               
            
     }
     th, td{
         border:1px solid green; 
     }
    
 
 </style>
</head>
<body>
   
   
   <?php
    $busqueda=$_GET["buscar"];
	require "conexion.php";
	$conexion =mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre");
    mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");//FUNCIÓN QUE RECONOCE LAS Ñ Y LAS TILDES
    $consulta="SELECT Pais,Divisas,Idioma,iva FROM paises WHERE pais LIKE '%$busqueda' ||Divisas LIKE '%$busqueda'|| Idioma LIKE '%$busqueda' || iva LIKE '%$busqueda'";
    $resultado=mysqli_query($conexion,$consulta);
//MYSQLI_ASSOC SE USA CON ARRAYS ASOCIATIVOS, DENTRO DEL ARGUMENTO DE mysqli_fetch_array   
    while($reg=mysqli_fetch_row($resultado))
     {

echo "<table>
<tr><th>País</th><th>Divisas</th><th>Idioma</th><th>Iva</th>
<tr><td>";	
echo $reg[0] . "</td><td>";
echo $reg[1] . "</td><td>";
echo $reg[2] . "</td><td>";
echo $reg[3] . " </td><td></tr></table>";
echo "<br>";
echo "<br>";
      
        }
     
mysqli_close($conexion);

?> 
    
<div id="boton">    
<a href="index.php"><button>Nueva Busqueda</button></a>	
</div>  
 </body>
</html>  
        