<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];

    if($varsesion == NULL || $varsesion == "")
    {
        echo "No tienes autorizacion<br>";
        echo "<a href= 'index.php'> Loguearse </a>";
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Granada</title>
    <style>
    #fotos .contenedor{
        display:flex;
        justify-content: center;
        flex-wrap: wrap; 
        padding: 10px;

    }
    article{
        text-align: center;
        font-size: 12px;
        color: crimson;

    }
    #fotos
    {
        width: 100%;
    }
    h2
    {
       text-align: center;

    }
    article img{
        margin: 10px;
    }
    @media(min-width: 787px){
        #fotos .contenedor{
            width: 60%;
            margin: 0 auto;
        }
    }
    </style>
</head>
<body>
    <section id="fotos">
    <h2>Bienvenidos a Granada</h2>
        <div class="contenedor">
            <?php
                $conexion = mysqli_connect("localhost", "root","","turisur");
                $consulta = mysqli_query($conexion, "SELECT * FROM fotos");

                while($res = mysqli_fetch_array($consulta))
                {
            ?>
            <article>
                <?php
                    echo '<img src="'.$res["foto"].' "width = "300" height ="180" border = "3px solid blue"><br>';
                    echo $res["nombre"]."<br>";
                ?>
            </article>
            <?php 
            }?>
        </div>
    </section>
    

    

    
</body>
</html>