<?php

class Ferry {
    var $id;
    var $cpdvehiculos;
    var $cpdpasajeros;
  
    function __construct ($id, $cpdvehiculos, $cpdpasajeros){
        $this->id = $id;
        $this->cpdvehiculos = $cpdvehiculos;
        $this->cpdpasajeros = $cpdpasejeros;
    }

    function getId (){
        return $this->id;
    }

    function setId ($id){
        $this->id = $id;
    }

    function getCpdVehiculos (){
        return $this->cpdvehiculos;
    }

    function setCpdVehiculos ($cpdvehiculos){
        $this->cpdvehiculos = $cpdvehiculos;
    }

    function getCpdPasajeros (){
        return $this->cpdpasajeros;
    }

    function setCpdPasajeros ($cpdpasajeros){
        $this->cpdpasajeros = $cpdpasajeros;
    }

    function mostrar () {
        echo $this->getId()." <br>";
        echo $this->getCpdVehicullos()." <br>";
        echo $this->getCpdPasajeros()." <br>";
    }
}

?>
