<?php

require_once ("tarifa.php");

class TarifaVehiculo extends Tarifa {
    var $tarifafija;
    var $pma;
    
    function __construct ($tarifafija, $pma){
        parent::__construct ();
        $this->tarifafija = $tarifafija;
        $this->pma = $pma;
    }

    function getTarifaFija (){
        return $this->tarifafija;
    }

    function setTarifaFija ($tarifafija){
        $this->tarifafija = $tarifafija;
    }

    function getPMA (){
        return $this->pma;
    }

    function setPMA ($pma){
        $this->pma = $pma;
    }
    function mostrar () {
        echo $this->getTarifaFija()." <br>";
        echo $this->getPMA()." <br>";
    }
}

?>
