function validar() {
    var nombre, apellidos, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    formacion = document.getElementById("Formacion").value;
    lenguaje = document.getElementById("Lenguaje").value;
    expresion = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-zA-Z\.]{2,6})+$/;
    if(nombre === "" || apellidos==="" || correo==="" || usuario==="" || clave===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    if(nombre.length>100){
        alert("El nombre no puede ser mayor de 100 caracteres");
        return false;
    }
    if(apellidos.length>100){
        alert("Los apellidos no pueden ser mayores de 100 caracteres");
        return false;
    }
    if(!expresion.test(correo)){
        alert("El correo introducido no es válido");
        return false;
    }
    if(usuario.length>50){
        alert("El usuario no puede ser mayor de 50 caracteres");
        return false;
    }
    if(clave.length>50){
        alert("La clave no puede ser mayor de 50 caracteres");
        return false;
    }
    if(formacion == "0"){
         alert("No se olvide introducir su formación");
        return false;
    }
    if(lenguaje == "0"){
         alert("No se olvide elegir un lenguaje");
        return false;
    }
    opciones=document.getElementsByName("nivel");
    var seleccionado=false;
    for(var i=0;i<opciones.length;i++){
        if(opciones[i].checked){
            seleccionado=true;
            break;
        }
    }
    if(seleccionado==false){
        alert("No se ha seleccionado ningun nivel de experiencia");
        return false;
    }
}