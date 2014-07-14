<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_fecha($valor){
		$exp_reg = '/^\d{2}\/\d{2}\/\d{4}$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_CP($valor){
		$exp_reg = '/^\d{5}$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_Numero_Entero($valor){
		$exp_reg = '/^[+-]?[0-9]+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_Numero_Real($valor){
		$exp_reg = '/^[+-]?\d+([,.]\d+)?$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	

	public	function Valida_telefono($valor) {  
		$expresion_regular_telefono ='/^\d{9}$/';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
		 // 9 cifras numéricas.  var expresion_regular_dni = /^\d{8}[a-zA-Z]$/; // 8 cifras numéricas más un carácter alfabético.  // Usaremos el método "test" de las expresiones regulares:  if(expresion_regular_telefono.test(formulario.telefono.value)==false) {   alert('Campo TELEFONO no válido.');   return false; // sale de la función y NO envía el formulario  }  if(expresion_regular_dni.test(formulario.dni.value)==false) {    alert('Campo DNI no válido.');   return false; // sale de la función y NO envía el formulario  }  alert('Gracias por rellenar nuestro formulario correctamente.');  return true; // sale de la función y SÍ envía el formulario 

	public function valida_cadenas(formulario) {  
	expresion_regular = new RegExp(formulario.expresion.value);  
	// Usamos el método "test" de la expresión regular  
	if(expresion_regular.test(formulario.cadena.value)==false) {  
		 alert('La cadena no cumple el patrón de la expresión regular.');   
		 return false; //no envía el formulario  
		 }  
		 return true; // Envía el formulario 
		
	}
} 

?>    