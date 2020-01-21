$(document).ready(function(){
   $("#volver").hide();
    
    //utilizamos la función scroll de window
    
   $(window).scroll(function(){
       
       if($(this).scrollTop()>50){//scroll más de 100px q desaparezca
           
           $("#volver").fadeIn(1000);//Q aparezca
       }else{
           $("#volver").fadeOut(1000);//Q desaparezca.
       }
           
  });
    
//Ahora para q cdo hagamos click suba a toda leche.
    $("#volver").click(function(){
      $('body,html').animate({//xa qhaga el body animado
         scrollTop: 0 
    },150);  
        
        
        
        
    });
});