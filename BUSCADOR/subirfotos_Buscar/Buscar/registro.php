<?php
//isset: Comprueba si las variables están definida
if(isset($_POST['submit'])){
   $nombre = $_POST['nombre']; 
    $apellidos = $_POST['apellidos']; 
    $correo = $_POST['correo']; 
    $usuario = $_POST['usuario']; 
    $clave =$_POST['clave']; 
    $telefono = $_POST['telefono'];
    
    
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Formulario_registros</title>
 <link rel="stylesheet"   href="estilos2.css"/> 
 <script type="text/javascript" src="validacion.js"></script>   
</head>
<body>


<h1>REGISTRARSE EN EL PORTAL</h1>
<form action="Usuario.php" method="POST" onsubmit="return validar();">  
   
    <div class="contenedor-inputs">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" minlength="3" class="input-48" >    
    
        <input type="text" id="apellidos" name="apellidos" minlength="5" placeholder="Apellidos" class="input-48" >
        
        <input type="text" id="correo" name="correo" minlength="9" placeholder="Correo" class="input-100" >
        
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-48" >
        
        <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" >
        
        <input type="text" id="telefono" name="telefono" minlength="9" placeholder="Telefono" class="input-100">
        
        <input class="btn-enviar" type="submit" name="submit" value="Registrar">
        
        <center><p class="form-link"><a href="login.html"><button style="cursor:pointer;">    ENTRAR    </button></a></p></center>                                                                                             </div> 
	
</form>
    
</body>
 </html>