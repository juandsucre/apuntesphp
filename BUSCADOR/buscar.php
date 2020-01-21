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
	<title>Busqueda</title>
	<style>
    
    h1{
        text-align: center;
    }   
    table{
        width:40%;
        border: 3px solid maroon;
        margin:10px;
        margin-top:20px;
        border-collapse:collapse;
        margin:0 auto;
        margin-bottom=2px;
    }
    td,th{
        border:2px solid darkblue;
        text-align:center;
    }

    th{
        background:darkgrey;
        font-weight:bolder;
        color:white;


    }
    td{
        background:white;
        color:black;
    }

	
	</style>
    
</head>
<body>
    <section>
        <table>
            <thead>
                <tr>
                    <th>País</th>
                    <th>Divisas</th>
                    <th>Idioma</th>
                    <th>IVA</th>
                </tr>
            </thead>
    <?php
    require("conexion.php");
    $busqueda = $_GET['buscar'];
    $conexion = mysqli_connect("$db_host", "$db_usuario", "$db_contra");
    mysqli_select_db($conexion,$db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");

    mysqli_set_charset($conexion,"utf8");
    $consulta = "SELECT Pais,Divisas,Idioma,IVA from europa where Pais like '%$busqueda' || Divisas like '%$busqueda'
     || Idioma like '%$busqueda' || IVA like '%$busqueda'";
     $resultado = mysqli_query($conexion, $consulta);

     while($reg = mysqli_fetch_row($resultado))
     {?>
        <tbody>
            <tr>
                <td><?php echo $reg[0]?></td>
                <td><?php echo $reg[1]?></td>
                <td><?php echo $reg[2]?></td>
                <td><?php echo $reg[3]?></td>
            </tr>
        </tbody>


     <?php }
     mysqli_close($conexion);
    ?>
    </table>
    </section>
    
</body>
</html>