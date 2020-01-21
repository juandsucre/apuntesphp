<?php

require("conexion.php");
$conexion = mysqli_connect($servidor,$user,$clavee,$DB) or die("Falla la conexion");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$formacion = $_POST['Formacion'];
$lenguaje= $_POST['Lenguaje'];
$exp = $_POST['nivel'];
mysqli_set_charset($conexion,"utf8");
$insertar = "INSERT INTO empleados (nombre,apellidos,correo,usuario,clave,formacion,lenguajes,experiencia) VALUES ('$nombre','$apellidos','$correo','$usuario','$clave','$formacion','$lenguaje','$exp')";
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM empleados where usuario = '$usuario' ");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script>alert("El usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}
$verificar_correo = mysqli_query($conexion,"SELECT * FROM empleados where correo = '$correo'");
if(mysqli_num_rows($verificar_correo)>0){
    echo '<script> alert("El correo ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}
$resultado=mysqli_query($conexion,$insertar) or die("Falla la consulta");
if(!$resultado){
    echo "Error al registrarse";
}else{
    echo "Usted ha sido registrado correctamente";
    header("Location:bienvenida.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>