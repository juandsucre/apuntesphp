<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/desplegable.js"></script> 
	<title>Menu Responsive</title>
	<style>
	h2, h3{
		font-family: Arial Black; font-size: 20px; color: navy;
		
	}
	
	#buscador .contenedor{
		background: #ccc;
		display: flex;
		justify-content: center;
		fex-wrap: nowrap;
		
		
	}
	
	</style>
    
</head>
<body>
    <header>
	<h1 style="float: left; padding-right: 150px;">VIENA</h1>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-align-justify"></label>
        <nav class="menu">
            <ul>
                <li class="submenu"><a href="#">Europa<span class="icon-down-open"></span></a>
                    <ul>
                        <li><a href="#">Viena</a></li>
                        <li><a href="#">Praga</a></li>
                        <li><a href="#">Budapest</a></li>
                        <li><a href="#">Varsovia</a></li>
                    </ul>        
                </li>
                <li class="submenu"><a href="#">America<span class="icon-down-open"></span></a>
                    <ul>
                        <li><a href="#">México</a></li>
                        <li><a href="#">Cuba</a></li>
                        <li><a href="#">Venezuela</a></li>
                        <li><a href="#">Colombia</a></li>
                    </ul>        
                </li> 
                <li><a href="#">Contacta</a></li>     
            </ul>

        </nav>

</header>
<main>
<section id="buscador">
<div class="contenedor">
<form style="width: 50%;color:#000; padding: 5px 40px 5px 40px ;" action="buscar.php" method="GET">
 <p>    
<input style="padding: 7px;float: left;" type="text" name="buscar" size="20" placeholder="buscar datos del país">&nbsp;&nbsp;&nbsp;&nbsp;
<input style="padding: 7px 15px  7px 7px;border-radius:30px;float: left; margin-left: 54px; "type="submit" name="enviar" value="INICIAR BUSQUEDA">
</p>	
</form>
</div>
</section>
<section id="introduccion">
<h2>Viena Ciudad Imperial</h2>
<p><span class="capital">V</span>iena es una ciudad austriaca en Europa Central situada a orillas del Danubio, en el valle de los Bosques de Viena, al pie de las primeras estribaciones de los Alpes. Es la capital de Austria y uno de sus nueve estados federados (Bundesland Wien). <br/>Está rodeada por el Estado federado de Baja Austria. Viena es la mayor ciudad, centro cultural y político de Austria. Además es la segunda ciudad más poblada de Europa Central (tras Berlín) y la décima ciudad en población de la Unión Europea. Su población supera el 1.800.000 de habitantes (2017) y su área metropolitana cuenta con 2,4 millones, población similar a la que tenía la ciudad en 1914. El idioma oficial es el alemán y se habla en una de sus variantes bávaras.<br/> La ciudad tiene una larga historia, ya que es una de las más antiguas capitales de Europa, por lo que cuenta con un importante patrimonio artístico. Durante el siglo XIX fue una de las grandes capitales musicales del mundo y a principios del siglo XX meca de la filosofía y el debate político de Occidente, así como uno de los principales centros culturales mundiales.</p> <br>
<h3>Sitios recomendados que visitan Viena</h3><br>
</section>

<form action="valida_fotos.php" method="POST" enctype="multipart/form-data">
    <center><table border="1">
<tr>
<td><label>Nombre</label></td>
<td colspan="2"><input type="text" name="txtnom" value=""></td>
</tr>
<tr>
<td>
<label>Fotos</label>
</td>
<td>
<input type="file" name="foto">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="Enviar" value="Enviar">
</td>
</tr>
</table> 
</form> 
</center>
<br/><br/>
<section id="fotos">
    <div class="contenedor">
    
   <?php
    $conexion =mysqli_connect("localhost","root","","turismo");
    $consulta = mysqli_query($conexion, "SELECT * FROM ciudades");
    while($res=mysqli_fetch_array($consulta)){
        ?>
        
        <article>
        <?php
        echo '<img src="'.$res["foto"].'" width="200" height="150" border="3px solid blue";><br>';
        echo $res["nombre"]."<br>";
        ?>
        
        </article>
    <?php
    }
    
    
    ?>
</section>
</main>	
  
</body>
</html>