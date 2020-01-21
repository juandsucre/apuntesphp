<?php
//las paginas privadas que solo se puedan ver haciendo login, deben llevar esto siempre
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if($varsesion==null || $varsesion==""){

        echo "No tienes autorización <br>";
        echo "<a href='registrarse.html'>Registrate</a>";
        die();

}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/reloj.js"></script> 
    <script src="js/desplegable.js"></script> 
	<title>Menu Responsive</title>
	<style>
        
        #introduccion{
            font-family: sans-serif;font-size: 12px;text-align:justify;padding: 0 8px;
        }
	h2, h3{
		font-family: Arial Black; font-size: 20px; color: navy; text-align: center;
		
	}
	
	#buscador .contenedor{
		background: #ccc;
		display: flex;
		justify-content: center;
		flex-wrap: nowrap;
		
		
	}
        #buscador form{
            width: 50%;
        }
        #buscame{
            /*background: #00a8ec;*/
            
        }
        #dos{
            background: #00a8ec;
        }
        #uno{
            border: 3px solid #00a8ec;
        }
        #fotos .contenedor{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 7px;
        }
        article{
            text-align: center;
            font-size: 12;
            color:crimson
        }
        #fotos{
            width: 100%;
        }
        #buscador form{
            width: 100%;
        }
         
    
            #tiempo{
                width: 70%;
                border: 3px solid navy;
                margin: 0 auto;
            }
        #tiempo th{
            border: 1px solid navy;
            background:  #00a8ec;
            text-align: center;
        }
        #tiempo td{
            border: 1px solid navy;
           text-align: center;
        }
            
            
        
	
   
	
	</style>
    
</head>
<body>
    <h2>Bienvenido a la sección de usuario: <?php echo $_SESSION['usuario'] ?></h2>
    <center><button><a href="cerrarsesion.php">Cerrar sesion</a></button></center>
    <header>
	<h1 style="float: left; padding-right: 150px; font-size: 12pt;">VIENA CIUDAD IMPERIAL</h1>
	<div id="reloj"></div>
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
                 <li><a href="cargar_fotos.php">Subir Fotos</a></li>
                <li class="submenu"><a href="#">America<span class="icon-down-open"></span></a>
                    <ul>
                        <li><a href="#">México</a></li>
                        <li><a href="#">Cuba</a></li>
                        <li><a href="#">Venezuela</a></li>
                        <li><a href="#">Colombia</a></li>
                    </ul>        
                </li> 
                <li><a href="#">Registrarse</a></li> 
                <li><a href="#">Descargas</a></li>  
            </ul>

        </nav>

</header>
<main>
<section id="buscador">
<div class="contenedor">
<center>
<form id="buscame" style="color:#000; padding: 5px 40px 5px 40px ;" action="buscar.php" method="GET">
 <p>    
<input id="uno" style="padding: 7px;float: left;" type="text" name="buscar" size="20" placeholder="buscar datos del país">
<input id="dos" style="padding: 7px 15px 7px 7px;border-radius:30px;float: left; margin-left: 54px;" type="submit" name="enviar" value="INICIAR BUSQUEDA">
</p>	
</form>
</center>
</div>
</section>
<section id="introduccion">
<h2>Viena Ciudad Imperial</h2>
<p><span class="capital">V</span>iena es una ciudad austriaca en Europa Central situada a orillas del Danubio, en el valle de los Bosques de Viena, al pie de las primeras estribaciones de los Alpes. Es la capital de Austria y uno de sus nueve estados federados (Bundesland Wien). <br/>Está rodeada por el Estado federado de Baja Austria. Viena es la mayor ciudad, centro cultural y político de Austria. Además es la segunda ciudad más poblada de Europa Central (tras Berlín) y la décima ciudad en población de la Unión Europea. Su población supera el 1.800.000 de habitantes (2017) y su área metropolitana cuenta con 2,4 millones, población similar a la que tenía la ciudad en 1914. El idioma oficial es el alemán y se habla en una de sus variantes bávaras.<br/> La ciudad tiene una larga historia, ya que es una de las más antiguas capitales de Europa, por lo que cuenta con un importante patrimonio artístico. Durante el siglo XIX fue una de las grandes capitales musicales del mundo y a principios del siglo XX meca de la filosofía y el debate político de Occidente, así como uno de los principales centros culturales mundiales.</p> <br>
<h3>Sitios recomendados por turistas que visitan Viena</h3><br>
</section>
<center>
<form  action="valida_fotos.php" method="POST" enctype="multipart/form-data">
    <center><table border="1">
<tr>
<td><label>Nombre</label></td>
<td colspan="2"><input type="text" name="nombre" value=""></td>
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
<input type="submit" name="Enviar" value="Enviar">&nbsp;&nbsp;&nbsp;<input type="submit" name="borrar" value="Borrar Foto">
</td>
</tr>
</table>
</center>
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
            echo '<img src="'.$res["foto"].'" width="200" height="150" border="3px solid blue"><br>';
            echo $res["nombre"]."<br>";
            ?>
        
        </article>
    <?php
    }
    
    
    ?>
    </div>
</section>
    <section id="clima">
    <h2>Informate sobre la Temperatura de Viena en Verano</h2>
    <table id="tiempo">
        <tr><th>Unidad de medida</th><th>Junio</th><th>Julio</th><th>Agosto</th><th>Septiembre</th></tr>
        <?php
			$conexion =mysqli_connect("localhost","root","","turismo");
            mysqli_set_charset($conexion,"utf8");
            $sql="SELECT  * FROM clima";
            $resultado = mysqli_query($conexion,$sql);
            while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <tr>
        <td><?php echo $mostrar['UnidadMedida']?></td>
        <td><?php echo $mostrar['Junio']?></td>
        <td><?php echo $mostrar['Julio']?></td>
        <td><?php echo $mostrar['Agosto']?></td>
        <td><?php echo $mostrar['Septiembre']?></td>
        </tr>
        <?php
        }
        ?>                        
    </table>
    
    
    </section>
</main>	
  
</body>
</html>