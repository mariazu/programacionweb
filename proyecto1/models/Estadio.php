<?php

class Estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk = 'idestadio';
    
    
    public $atributos = array(
        'Nombre'=>array(),
    );
    
    public $errores = array( );
    
    private $Nombre;
       
    
    function Estadio(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_Nombre(){
        return $this->Nombre;
    } 

    public function set_Nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

               
        $this->Nombre = trim($valor);
        
    }


    
    
    
}

?>
