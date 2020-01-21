<?php
require ("conexion.php");
$conexion=mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre")or die("Falla la conexión");
if(!$conexion){
    echo"Error al conectar la base de datos";
    }else{
    echo "Conectado con la base de datos";
    }
error_reporting (0);
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$telefono=$_POST['telefono'];
//esto se coloca para asegurar que tome las ñ y los acentos
mysqli_set_charset($conexion,"utf8");
//vamos a realizar una consulta para insertar los datos almacenados en las variables a la tabla.Y a evitar que se registren usuarios que ya existen (evitar duplicados)
$verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario)>0){
    echo'<script> alert("el usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
    }
$verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo)>0){
    echo'<script> alert("el correo ya existe");
    window.history.go(-1);
    </script>';
    exit;
    }
$insertar="INSERT INTO usuarios (nombre,apellidos,correo,usuario,clave,telefono)VALUES('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";
$resultado=mysqli_query($conexion,$insertar)or die("Falla la consulta");
    if(!$resultado){
        echo 'Error al registrarse';
    }else{
       echo "Usted ha sido registrado correctamente";
    header("location:index.php");
    }
mysqli_close($conexion);
?>
