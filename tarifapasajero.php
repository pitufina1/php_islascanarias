<?php

require_once("tarifa.php");

class TarifaPasajero extends Tarifa {
    var $edad;
    
    function __construct ($edad){
        parent::__construct ();
        $this->edad = $edad;
    }

    function getEdad (){
        return $this->edad;
    }

    function setEdad ($edad){
        $this->edad = $edad;
    }

    function mostrar () {
        echo $this->getEdad()." <br>";
    }
}

?>
