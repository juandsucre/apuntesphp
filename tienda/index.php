<?php

require "DevuelveProductos.php";

//tengo que crear una instancia para ekecutar el contructor
$productos = new DevuelveProductos();
$array_productos = $productos -> get_productos();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de importacion</title>
    <style>
    h1{
        text-align: center;
        
    }
    
    table{
        width: 40%;
        font-family: calibri;
        font-size: 10pt;
        border: 3px solid crimson;
        margin: 10px;
        margin-top: 20px;
        border-collapse: collapse;
        margin: 0 auto;
        margin-bottom: 2px;
    }
    td,th{
        border: 2px solid crimson;
        text-align: center;
    }
    th{
        background: darkgrey;
        font-weight: bolder;
        padding: 5px;
        color:white;
    }
    td{
        background: white;
        color: black;
    }
    
    
    </style>
</head>
<body>
<table>
<tr>
<th>Codigo</th>
<th>Nombre</th>
<th>Seccion</th>
<th>Precio</th>
<th>Fecha</th>
<th>Pais</th>
</tr>
<?php
foreach($array_productos as $elemento)
{
?>
<tr>
<td><?php echo $elemento['Codigo']?></td>
<td><?php echo $elemento['NOMBRE']?></td>
<td><?php echo $elemento['SECCION']?></td>
<td><?php echo $elemento['PRECIO']?></td>
<td><?php echo $elemento['FECHA']?></td>
<td><?php echo $elemento['PAIS']?></td>
</tr>
<?php }
?>

</table>
    
</body>
</html>