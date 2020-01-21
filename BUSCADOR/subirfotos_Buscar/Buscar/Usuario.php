<?PHP
require("conexion.php");
$conexion = mysqli_connect("$db_host", "$db_usuario", "$db_contra", "$db_nombre") or die ("Falla la conexion");

if(!$conexion){
	
	echo 'Error al conectarse a la base de datos';
	
}
//else{
	//echo 'conectado a la base de datos';
	//echo "<br/>";
	
//}
//print ("Se realiza la inserción");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
//consulta para insertar datos 
$insertar = "INSERT INTO usuario(nombre, apellidos, correo, usuario, clave, telefono) VALUES('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario'");
	if(mysqli_num_rows($verificar_usuario)>0){
		echo '<script>
		alert("El usuario ya está registrado");
		window.history.go(-1);
		</script>';
		
		
		exit;//le digo que termine para que no ejecute la consulta de abajo y registre
		
	}
	//copio y pego y rectifico para correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");
	if(mysqli_num_rows($verificar_correo)>0){
		echo '<script>
		alert("El correo ya está registrado");
		window.history.go(-1);
		</script>';
		
		exit;//le digo que termine para que no ejecute la consulta de abajo y registre
		
	}
//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar) or die("Falla la consulta");
	if(!$resultado){
		echo 'Error al registrarse';
	}else{
		echo '<script>
		alert("Usted ha sido registrado exitosamente");
		window.history.go(-1);
		</script>';
	}
//cerrar conexion
mysqli_close($conexion);





?>