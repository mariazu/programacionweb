<?php

class Er {
    //valida un email
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//valida un nombre
	public function valida_nombre($valor){
		$exp_reg = '/^[A-Za-záéíóúñ]{2,}+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}
	} 
	
	//valida una fecha
	public function valida_fecha($valor){
		$exp_reg = '/^\d{2}\/\d{2}\/\d{4}$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//valida una fecha
	public function valida_fechas($valor){
		$exp_reg = '^(((0?[1-9]|1d|2[0-8]){[/-.]}(0?[1-9]|1[012])|(29|30){[/-.]}(0?[13456789]|1[012])|31{[/-.]}(0?[13578]|1[02])){[/-.]}(19|[2-9]d)d{2}|29{[/-.]}0?2{[/-.]}((19|[2-9]d)(0[48]|[2468][048]|[13579][26])|(([2468][048]|[3579][26])00)))$#'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//valida un Codigo Postal
	public function valida_CP($valor){
		$exp_reg = '/^\d{5}$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//valida un numero entero
	public function valida_Numero_Entero($valor){
		$exp_reg = '/^[+-]?[0-9]+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//valida un numero real
	public function valida_Numero_Real($valor){
		$exp_reg = '/^[+-]?\d+([,.]\d+)?$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	
	//valida un numero telefonico
	public	function Valida_telefono($valor) {  
		$exp_reg ='/^\d{9}$/';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida una URL
	public	function Valida_URL($valor) {  
		$exp_reg ='/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida la seguridad de una contraseña
	public	function Valida_Contrasena($valor) {  
		$exp_reg ='(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida el nombre de usuario
	public	function Valida_Usuario($valor) {  
		$exp_reg ='/^[a-z\d_]{4,15}$/i';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida el nombre y el apellido
	public	function Valida_NA($valor) {  
		$exp_reg ='/^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$/';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida el numero de una tarjeta de credito
	public	function Valida_TCredito($valor) {  
		$exp_reg ='^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida el id de un video en youtube
	public	function Valida_IDYoutube($valor) {  
		$exp_reg ='/http:\/\/(?:youtu\.be\/|(?:[a-z]{2,3}\.)?youtube\.com\/watch(?:\?|#\!)v=)([\w-]{11}).*/gi';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida las etiquetas de imagen sin cerrar
	public	function Valida_Imagen($valor) {  
		$exp_reg ='<img([^>]+)(\s*[^\/])></img([^>';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida una direccion ip
	public	function Valida_IP($valor) {  
		$exp_reg ='/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida un domicilio
	public	function Valida_Domicilio($valor) {  
		$exp_reg ='^.*(?=.*[0-9])(?=.*[a-zA-ZñÑ\s]).*$';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida IFE
	public	function Valida_IFE($valor) {  
		$exp_reg ='^.*(?=.{13})[+-]?\d+(\.\d+)?$';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida CURP
	public	function Valida_CURP($valor) {  
		$exp_reg ='^.*(?=.{18})(?=.*[0-9])(?=.*[A-ZÑ]).*$';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida que el dato sea solo numeros
	public	function Valida_Numeros($valor) {  
		$exp_reg ='[0-9]{1,9}(\.[0-9]{0,2})?$';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida que el dato sea solo letras
	public	function Valida_Letras($valor) {  
		$exp_reg ='[a-zA-ZñÑ\s]';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}
	//valida el RFC
	public	function Valida_RFC($valor) {  
		$exp_reg ='[A-Z]{3,4}[ \-]?[0-9]{2}((0{1}[1-9]{1})|(1{1}[0-2]{1}))((0{1}[1-9]{1})|([1-2]{1}[0-9]{1})|(3{1}[0-1]{1}))[ \-]?[A-Z0-9]{3}';
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		 }
	}	 
} 

?>    