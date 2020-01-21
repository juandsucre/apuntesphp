var inputs = document.getElementsByClassName('formulario__input');//Q me obtenga todos los elemntos de la clase formulario__input y lo va a guardar en la var inputs
//Tengo q recorrer con for la vr inputs xq es un array y engloba varios valores
for(var i=0; i<inputs.length;i++){
    //q escuche el evento keyup q es cdo suelto la tecla.Justo cdo termino de escripbir. Evalúa q el evento esté lleno.
    inputs[i].addEventListener('keyup', function(){
      //Metemos una cond q dice q si el input está con un valor o más,seleccione el siguiente elemneto
        if(this.value.length>=1){
         this.nextElementSibling.classList.add('fijar')
    }else{
        this.nextElementSibling.classList.remove('fijar')
    }
        
        
        
        
    });
    
}