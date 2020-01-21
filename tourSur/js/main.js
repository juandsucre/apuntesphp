//como el script esta en el head
$(document).ready(function(){
	//este es el paso 2:
	var imgItems = $('.slider li').length;//cuenta cuantos elementos li(diapositivas), las 4 diapositivas
	//voy hacer un cilo para llamr los circilos dianmicamente y por ello tengo que quitarlos de html.
	//llamo a paginacion y con append añado elementos
	//paso 4 crear la variable imgPos
	var imgPos = 1;
	//El for pertenece al paso 2
	for(i=1; i<= imgItems; i++)
	{
	$('.pagination').append('<li><span class="icon-circle-thin"></span></li>');	
		
		
		
		
	}
	/**/
	
	//PRIMER PASO: voy hacer a que desaparezcan todas la imagenes y solo quede la primera
	$('.slider li').hide();
	$('.slider li:first').show();
	//Llamaremos al primer li de paginacion para aplicarle css diferente
	$('.pagination li:first').css({'color':'white', 'background':'white'});
	
	
	//COMIENZA EL PASO 3
	$('.pagination li').click(pagination);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);
	
	//QUINTO PASO: HACERLO DESPUES DE prevSlider
		setInterval(function(){
		
			nextSlider();
		
		
		}, 4000);
	
	
	
	function pagination(){
		var paginationPos = $(this).index()+1;
		$('.slider li').hide();
		$('.slider li:nth-child('+ paginationPos +')').fadeIn();
		//para el color comenzare con ponerle el color negro a todos
		$('.pagination li').css({'color': '#b4b4b4','background':'#b4b4b4'});
		$(this).css({'color': 'aqua','background':'aqua'});
		
		imgPos = paginationPos;
	
	}
	
	function nextSlider(){
		//CREAR imgPos = 1;  ARRIBA COMO SEGUNDA VARIABLE GLOBAL
		if( imgPos >= imgItems){
			imgPos= 1;
		}else{
			imgPos++;}
		$('.pagination li').css({'color': '#b4b4b4','background':'#b4b4b4'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': 'aqua','background':'aqua'});
		$('.slider li').hide();
		$('.slider li:nth-child('+ imgPos +')').fadeIn();
	}
	function prevSlider(){
		
		if( imgPos <= 1){
			imgPos= imgItems;
		}else{
			imgPos--;}
		$('.pagination li').css({'color': '#b4b4b4','background':'#b4b4b4'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': 'aqua','background':'aqua'});
		$('.slider li').hide();
		$('.slider li:nth-child('+ imgPos +')').fadeIn();
	}
		
	
});