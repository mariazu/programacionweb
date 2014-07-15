<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'idpais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'idcontinente'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $bandera;
    private $idcontinente;
       
    
    function Pais(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es valido";
        }

               
        $this->nombre = trim($valor);
        
    }
    public function get_bandera(){
        return $this->bandera;
    } 

    public function set_bandera($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esta imagen (".$valor.") no es valida";
        }

               
        $this->bandera = trim($valor);
        
    }
    public function get_idcontinente(){
        return $this->idcontinente;
    } 

    public function set_idcontinente($valor){

        $er = new Er();

               
        $this->idcontinente = trim($valor);
        
    }


    
    
    
}

?>
