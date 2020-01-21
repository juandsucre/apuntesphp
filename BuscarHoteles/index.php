<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<title>Slider Shows</title>
<link rel="stylesheet"  href="css/estilos.css"/> 
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/slider.js"></script>
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
	<h1 style="text-align: center; margin-botton: 10px">Granada Nazarí & Granada Católica</h1>
	<section id="buscador">
<div class="contenedor">
<center>
<form id="buscame" style="color:#000; padding: 5px 40px 5px 40px ;" action="buscarhoteles.php" method="GET">
 <p>    
<input id="uno" style="padding: 7px;float: left;" type="text" name="buscar" size="20" placeholder="buscar datos de los hoteles">
<input id="dos" style="padding: 7px 15px 7px 7px;border-radius:30px;float: left; margin-left: 54px;" type="submit" name="enviar" value="INICIAR BUSQUEDA">
</p>	
</form>
</center>
</div>
</section>
<div class="slideshow">
	<ul class="slider">
		<li>
		 <img src="img/1.jpg" alt="">
		 <section class="caption">
			<h3>GRANADA</h3>
			<p>Granada fue capital del Reino Zirí de Granada, durante el siglo XI, y del Reino Nazarí de Granada entre los siglos XIII y XV. Tras la toma de la ciudad por los Reyes Católicos, se mantuvo como capital del Reino castellano de Granada.</p>
		 </section>
		</li>
		<li>
		 <img src="img/2.png" alt="">
		 <section class="caption">
			<h3>CATEDRAL DE GRANADA</h3>
			<p>Con el reinado de Carlos I de España se llevarán a cabo numerosas construcciones en la ciudad de Granada, dada la intención del monarca en convertir a la urbe en el modelo de ciudad del siglo XVI. Así la construcción de la catedral de Granada.</p>
		 </section>
		</li>
		<li>
		 <img src="img/3.jpg" alt="">
		 <section class="caption">
			<h3>PALACIO DE LOS REYES CATÓLICOS</h3>
			<p>Palacio mandado a construir por el emperador Carlos V. A partir de su boda con Isabel de Portugal, celebrada en Sevilla en 1526. Tras el enlace, la pareja residió varios meses en la Alhambra, quedando profundamente impresionado por los Palacios nazaríes, dejando encargada la construcción del nuevo palacio.</p>
		 </section>
		</li>
		<li>
		 <img src="img/4.jpg" alt="">
		 <section class="caption">
			<h3>PARADOR DE GRANADA</h3>
			<p>Parador de San Francisco es un alojamiento turístico perteneciente a la red de Paradores Nacionales de Turismo.Está ubicado en el antiguo solar que ocupaba el Convento de San Francisco del siglo XV.</p>
		 </section>
		</li>
		<li>
		 <img src="img/5.jpg" alt="">
		 <section class="caption">
			<h3>VISTAS DE SIERRA NEVADA</h3>
		</section>
		</li>
	</ul>
	<ol class="pagination">
		
	</ol>
	<div class="left">
	<span class="fa fa-caret-square-o-left"></span>
	</div>
	<div class="right">
		<span class="fa fa-caret-square-o-right"></span>
	</div>
</div> 

<section class="hoteles">
	<h2 class="titu">Los Mejores Hoteles de Granada</h2>

	<table>
		<thead>
		<tr>
            <th>ID</th>
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
		mysqli_select_db($conexion,$db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");
		mysqli_set_charset($conexion,"utf8");
		$consulta = "SELECT id,Nombre,Direccion,telefono, Categoria, Descripcion from hoteles";
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
			<td><?php echo $reg[5] ?></td>
		</tbody>
		<?php }
			mysqli_close($conexion);
			?>

	</table>
</section>
    
</body>
 </html>