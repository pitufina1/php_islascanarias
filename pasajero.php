<?php

class Pasajero {
    var $nombre;
    var $cif;
    var $fechanaci;
    var $discapacitado; //Booleano True o False

    function __construct ($nombre, $cif, $fechanaci, $discapacitado){
        $this->nombre = $nombre;
        $this->cif = $cif;
        $this->fechanaci = $fechanaci;
        $this->discapacitado = $discapacitado;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getCif (){
        return $this->cif;
    }

    function setCif ($cif){
        $this->cif = $cif;
    }

    function getFechaNaci (){
        return $this->fechanaci;
    }

    function setFechaNaci ($fechanaci){
        $this->fechanaci = $fechanaci;
    }

    function getDiscapacitado (){
        return $this->disacapacitado;
    }

    function setDiscapacitado ($discapacitado){
        $this->discapacitado = $discapacitado;
    }
    function mostrar () {
        echo $this->getNombre()." <br>";
        echo $this->getCif()." <br>";
        echo $this->getFechaNaci()." <br>";
        echo $this->getDiscapacitado()." <br>";
    }
}

?>
