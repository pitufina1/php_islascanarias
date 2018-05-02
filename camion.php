<?php

require_once("vehiculo.php");

class Camion extends Vehiculo {
    var $pma; 
    var $tara;
    
    function __construct ($marca, $pma, $tara){
        parents::__construct ($marca);
        $this->pma = $pma;
        $this->tara = $tara;
    }

    function getPMA (){
        return $this->pma;
    }

    function setPMA ($pma){
        $this->pma = $pma;
    }

    function getTara (){
        return $this->tara;
    }

    function setTara ($tara){
        $this->tara = $tara;
    }

    function mostrar () {
        echo $this->getPMA()." <br>";
        echo $this->getTara()." <br>";
    }
}

?>