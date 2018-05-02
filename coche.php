<?php

require_once("vehiculo.php");

class Coche extends Vehiculo {
    var $clase; //Clase A, B, C o D. Se paga en funcion de cada una de ellas.
    
    function __construct ($marca, $clase){
        parents::__construct ($marca);
        $this->clase = $clase;
    }

    function getClase (){
        return $this->marca;
    }

    function setClase ($clase){
        $this->clase = $clase;
    }

    function mostrar () {
        echo $this->getClase()." <br>";
    }
}

?>