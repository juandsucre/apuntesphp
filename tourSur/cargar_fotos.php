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
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <style>
        body{
            background: linear-gradient(To right,#710169,rgba(5,134,116,0.7),#058674);
        }
        .contenedor{
            display: block;
        }
        h1{
            text-align: center;
        }
        form{
            width: 95%;
            margin: auto;
            border:3px inset white;
        }
        #uno{
            padding: 7px 15px;
            background: white;
            color:#af071f;
            font-size: 15px;
            text-align: center;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        #dos{
            background: rgba(163,165,0.9);
            border-radius: 10px;
            border:2px solid white;
            padding: 7px 15px;
        }
        h2{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
        section{
            padding-top: 20px
        }

        .boton{
            
        }
    </style>
    </head>
    <body>
    <h2>Bienvenido a la seccion usuario: <?php echo $_SESSION['usuario']?></h2>
        <center><button><a href="cerrarsesion.php">Cerrar sessión</a></button></center>
        <div class="contenedor">
        <form action="validarFotos.php" method="post" enctype="multipart/form-data">
            <h2>Subir Fotografia</h2>
            <table>
            <tr>
                <td><label form="">Nombre</label></td>
                <td colspan="2">
                    <input type="text" name="nombre" id="uno" placeholder="Titulo de la foto">    
                </td>
            </tr>
            <tr>
            <td><label form="">Fotos</label></td>
                <td colspan="2">
                    <input type="file" name="foto" id="dos" placeholder="">    
                </td>    
            </tr>
                <tr>
                    <td colspan="2" style="margin-left: 2000px;"><center><input  class="boton" type="submit" name="subir" value="    Subir foto    "></center></td>
                </tr>
            
            </table>
            </form>
            <section>
                <form action="eliminarfoto.php" method="post">
                    <h2>Eliminar Fotografía</h2>
                    <table>
                    <tr>
                        <td><label form="">Nombre</label></td>
                        <td colspan="2">
                            <input type="text" name="nombre" id="uno" placeholder="Introduce nombre de la foto">
                            <input type="submit" name="subir" value="    Borrar foto    " class="boton">
                        </td>
                    </tr>
                    </table>

                </form>
            </section>
        </div>
    </body>
</html>