function validar()
{
    var nombre, apellidos,correo,clave,usuario,titulo,lengua, expresion;
    nombre = document.getElementById('nombre').value;
    apellidos = document.getElementById('apellidos').value;
    correo = document.getElementById('correo').value;
    usuario = document.getElementById('usuario').value;
    clave = document.getElementById('clave').value;
    expresion =/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-zA-Z\.]{2,6})+$/; 

    if (nombre==="" || apellidos ==="" || correo ==="" || usuario ==="" ||clave==="")
    {
        alert("Todos los campos son obligatorio");
        return false;

    }
    if(nombre.lenght > 100)
    {
        alert("El nombre tiene como maximo 100 caracteres");
        return false;
    }
    if(apellidos.lenght > 100)
    {
        alert("Los apellidos tiene como maximo 100 caracteres");
        return false;
    }
    //TEST PARA COMPROBAR CON EXPRESION REGULAR
    if(!expresion.test(correo))
    {
        alert("Correo no válido");
        return false;
    }
    if(usuario.lenght > 50)
    {
        alert("El usuario tiene como maximo 50 caracteres");
        return false;
    } 
    if(clave.lenght > 50)
    {
        alert("La clave tiene como maximo 50 caracteres");
        return false;
    }

   opciones = document.getElementsByName('nivel');
   var seleccionado = false;
    for(var i = 0; i<opciones.lenght; i++)
    {
        if(opciones[i].checked)
        {
            seleccionado = true;
            break;
        }
    }
    if(!seleccionado)
    {
            alert("Debe indícar uno");
            return false; 
    }

    lengua = document.getElementsByName('lengua');

    if(lengua ===" ")
    {
        alert("no se ha seleccionado opcion");
    }

    titulo = document.getElementsByName('titu');
      
    if(titulo === " ")
    {
        alert("DEBE INDICAR UNA titulo");
    }


}