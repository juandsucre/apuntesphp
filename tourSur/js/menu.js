$(document).ready(function(){//FUNCIÓN ANÓNIMA PARA QUE CARGUE TODO EL HTML
    //VOY A LLAMAR A LA CLASE SUBMENU AL HACER CLICK
$(".submenu").click(function(){
    $(this).children("ul").slideToggle();//THIS LLAMA AL ÚLTIMO OBJETO MENCIONADO, EN ESTE CASO SUBMENU. CUANDO HAGO CLICK EN LAS CLASES SUBMENUS, SE EJECUTARÁ LA FUNCIÓN SLIDETOGGLE PARA DESPLEGAR A SUS HIJOS UL
});
$("ul").click(function(p){//DETENDRÁ LA PROPAGACIÓN DE DESPLIEGUE A TODOS LOS UL
    p.stopPropagation();

})
});
/*$(".submenu").click(function(){
  $(this).children("ul") .slideToggle()
    //Esto muestra u oculta el menu.Lo q pasa q al hacer click en su hijo tb se oculta el padreEsto se llama propagación de eventos.
});
$("ul").click(function(p){
 p.stopPropagation();//Así se detiene esta propagación de eventos.   
    
    
});*/