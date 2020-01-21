function validar(){
    var nombre,apellidos,correo,usuario,clave,titulacion,lenguaje, expresion;

    nombre=document.getElementById("nombre").value;
    apellidos=document.getElementById("apellidos").value;
    correo=document.getElementById("correo").value;
    usuario=document.getElementById("usuario").value;
    clave=document.getElementById("clave").value;
    titulacion=document.getElementById("titulo").value;
    lenguaje=document.getElementById("lenguaje").value;

    //para validar el correo
    expresion=/^([\da-z_\.-]+)@([\da-z.-]+)\.([a-zA-Z\.]{2,6})+$/;

    if(nombre===""||apellidos===""||correo===""||usuario===""||clave===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    if(nombre.length>100){
        alert("EL nombre tiene como maximo 100 caracteres");
        return false;
    }

    if(apellidos.length>100){
        alert("Los apellidos tienen como maximo 100 caracteres");
        return false;
    }

    if(!expresion.test(correo)){
        alert("Correo no válido");
        return false;
    }

    if(usuario.length>50){
        alert("EL usuario tiene como maximo 50 caracter");
        return false;
    }
    
    if(clave.length>100){
        alert("La clave tienen como maximo 100 caracteres");
        return false;
    }
    if(titulacion=="0"){
        alert("Debe seleccionar una titulación");
        return false;
    }
    if(lenguaje=="0"){
        alert("Debe seleccionar un lenguaje");
        return false;
    }
    
    opciones=document.getElementsByName("experiencia");
    var seleccionado=false;

    for(var i=0;i<opciones.length;i++){
        if(opciones[i].checked){
            seleccionado=true;
            break;
        }
    }

    if(!seleccionado){
        alert("Debe indicar un nivel");
        return false;
    }
   
}