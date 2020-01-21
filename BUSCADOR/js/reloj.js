function relojDigital(){
	var Tiempo = new Date();
	var Minutos = Tiempo.getMinutes();
	var Segundos = Tiempo.getSeconds();
	var Hora = Tiempo.getHours();
	var ExtHora;
	var HoraCompleta;
	if(Minutos < 10){
		Minutos = "0" + Minutos;
		
	} else{
		Minutos = "" +Minutos;
		
	}
	if(Segundos < 10){
		Segundos = "0" + Segundos;
		
	} else{
		Segundos = "" +Segundos;
		
	}
	
	if(Hora <12){
		ExtHora = "AM";
	}else{
		ExtHora = "PM";
	}
	if(Hora > 12){
		Hora -= 12;
	} else{
		Hora = Hora;
	}
	if(Hora == 0){
		
		Hora = 12;
	}else{
		Hora = Hora;
	}
	HoraCompleta = Hora + ":" + Minutos + ":" + Segundos +""+ExtHora;
	$("#reloj").html(HoraCompleta);
}

$(document).ready(function(){
	setInterval(relojDigital, 1000);
	//lla a la función ya creada cada segundo
	
	
});


	
	
	
	
	
	
	
	
