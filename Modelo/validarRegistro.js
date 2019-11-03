// JavaScript Document



function validarRegistro(id,nombre,edad,correo,telefono){
	
	id = document.getElementById(id);
	nombre= document.getElementById(nombre);
	edad = document.getElementById(edad);
	correo = document.getElementById(correo);
	telefono = document.getElementById(telefono);
	
	if(id.value == ""){
		alert("te falta el id");
		
		return false;
		
		
	}
	
	if(nombre.value == ""){
		alert("te falta el nombre");
		return false;
		
		
	}
	
	if(edad.value == ""){
		alert("te falta la edad");
		return false;
		
		
	}
	
	if(correo.value == ""){
		alert("te falta el correo");
		return false;
		
		
	}
	
	if(telefono.value == ""){
		alert("te falta el telefono");
		return false;
		
		
	}
	
	
	
	
	
	
	
	
	
}