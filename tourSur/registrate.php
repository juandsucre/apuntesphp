<?PHP
require("conexion.php");
$conexion=mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre")or die("Falla la conexion");
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
mysqli_set_charset($conexion,"utf8");
$insertar= "INSERT INTO operadores (nombre,apellidos,correo,usuario,clave) values
('$nombre','$apellidos','$correo','$usuario','$clave')";

$verificar_usuario=mysqli_query($comexion,"SELECT * from operadores  where usuario ='$usuario'");

if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script> alert("El usuario ya esta registrado");
            window.history.go(-1); 
            </script>';
    exit;
}
$verificar_correro=mysqli_query($comexion,"SELECT * from operadores  where Correo ='$correo'");

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
    echo "Usted ha sido regsitrado correctamente";
    header("Location:bienvenida.html");
}
//para liberar la memoria, se pone en los parentesis la variable que tiene cargada los datos que se quieren insertar 
mysqli_free_result($resultado);


mysqli_close($conexion);
    ?>