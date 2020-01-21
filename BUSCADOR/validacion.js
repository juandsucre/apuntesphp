function validar(){
    
 var nombre, apellidos, correo, usuario, clave, telefono, expresion;  
    
    
  expresion =/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-zA-Z\.]{2,6})+$/
  nombre=document.getElementById("nombre").value;  
  apellidos=document.getElementById("apellidos").value;
  correo=document.getElementById("correo").value; 
  usuario=document.getElementById("usuario").value; 
  clave=document.getElementById("clave").value; 
  telefono=document.getElementById("telefono").value; 
     if(nombre === "" || apellidos === ""||correo===""||usuario===""||clave===""||telefono===""){
         alert("Todos los campos son obligatorios");
         return false;
         
     }
else if(nombre.length>50){
alert("El nombre es muy largo");
return false;
 } 
   
else if(apellidos.length>100){
     alert("Los apellidos son muy largos");
     return false;
 }  
  
    
 else if(!expresion.test(correo)){
    alert("El correo no es válido");
    return false;
    
} 
    
 else if(correo.length>50){
     alert("El correo es muy largo");
     return false;
 } 
 else if(usuario.length>50 || clave.length>50){
     alert("El usuario y la clave solo deben tener 20 caracteres como máximo");
     return false;
 } 
 
 else if(telefono.length>13){
     alert("El telefono es muy largo");
     return false;
 }   
 else if(isNaN(telefono)){
     alert("El telefono tiene que ser numerico");
     return false;
 }   
}