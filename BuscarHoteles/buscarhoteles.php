<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Hoteles</title>
    <style>
    h1{
        text-align: center;
    }   
    table{
        width:70%;
        border: 3px solid maroon;
        margin:15px;
        margin-top:50px;
        border-collapse:collapse;
        margin:0 auto;
        margin-bottom:2px;
    }
    td,th{
        border:2px solid darkblue;
        text-align:center;
    }

    th{
        background:darkgrey;
        font-weight:bolder;
		color:white;
		padding: 10px;


    }
    td{
        background:white;
		color:black;	
    }

    .hoteles{
		margin-top: 80px;
	}
	.titu
	{
		text-align: center;
		margin: 0 auto;
		
	}
    
    </style>
</head>
<body>
<section class="hoteles">
	<h2 class="titu">El resultado de su busqueda es</h2>

	<table>
		<thead>
		<tr>
            <th>Nombre</th>
            <th>Dirección</th>
			<th>Teléfono</th>
			<th>Categoría</th>
			<th>Descripción</th>
        </tr>

		</thead>
		<?php 
		require("conexion.php");
        $conexion = mysqli_connect("$db_host", "$db_usuario", "$db_contra");
        $busqueda = $_GET['buscar'];
		mysqli_select_db($conexion,$db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");
		mysqli_set_charset($conexion,"utf8");
		$consulta = "SELECT Nombre,Direccion,telefono, Categoria, Descripcion from hoteles where Nombre like '%$busqueda%' || Categoria like '%$busqueda%'";
		$resultado = mysqli_query($conexion, $consulta);
		while($reg = mysqli_fetch_row($resultado))
		{
		?>
		<tbody>
			<td><?php echo $reg[0] ?></td>
			<td><?php echo $reg[1] ?></td>
			<td><?php echo $reg[2] ?></td>
			<td><?php echo $reg[3] ?></td>
			<td><?php echo $reg[4] ?></td>
		</tbody>
		<?php }
			mysqli_close($conexion);
			?>

	</table>
</section>
    
</body>
</html>