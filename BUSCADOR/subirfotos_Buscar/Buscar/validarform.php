<?php
$mensaje = "Gracias por registrarte";
if(isset($_POST['submit']))
{
if(empty($nombre)){
      echo "<p class='error'>* Añade tu nombre</p>" ;  
    } 
if(empty($apellidos)){
      echo "<p class='error'>* Añade tús apellidos</p>" ;  
    } 
if(empty($correo)){
      echo "<p class='error'>* Añade tu correo</p>" ;  
    } else{
    if(!filter_var($correo, FILTER_VALIDATE_EMAIL))
                
        {
        echo "<p class='error'>* El correo no es válido</p>" ;  
        
        }
        }
    if(empty($usuario)){
      echo "<p class='error'>* Elige un usuario</p>" ;  
    } 
    if(empty($clave)){
      echo "<p class='error'>* Elige una clave</p>" ;  
    } 
    if(empty($telefono)){
      echo "<p class='error'>* El campo telefono es obligatorio</p>" ;  
    } else{
         if(!is_numeric($telefono)){
       echo "<p class='error'>* El telefono tiene que ser numérico</p>" ;       
         }
    }
			
         
    
    
    
}

//require "registro.php";










?>