<?php

class Ruta {
    var $islaorigen;
    var $isladestino;
    var $ferry;
    var $precio;
    var $duraciontrayecto; //Matriz de rutas. Duracion Trayecto en horas.

    function __construct ($islaorigen, $isladestino, $precio, $duraciontrayecto){
        $this->islaorigen = $islaorigen;
        $this->isladestino = $isladestino;
        $this->precio = $precio;
        $this->duraciontrayecto = $duraciontrayecto;
        $this->ferry = array ();
    }

    function getIslaOrigen (){
        return $this->islaorigen;
    }

    function setIslaOrigen ($islaorigen){
        $this->islaorigen = $islaorigen;
    }

    function getIslaDestino (){
        return $this->isladestino;
    }

    function setIslaDestino ($isladestino){
        $this->isladestino = $isladestino;
    }

    function getPrecio (){
        return $this->precio;
    }

    function setPrecio ($precio){
        $this->precio = $precio;
    }

    function getDuracionTrayecto (){
        return $this->duraciontrayecto;
    }

    function setDuracionTrayecto ($duraciontrayecto){
        $this->duraciontrayecto = $duraciontrayecto;
    }
    function mostrar () {
        echo $this->getIslaOrigen()." <br>";
        echo $this->getIslaDestino()." <br>";
        echo $this->getPrecio()." <br>";
        echo $this->getDuracionTrayecto()." <br>";

        for ($i=0; $i < count ($this->ferrys) ; $i++) { 
            $this->ferrys[$i]->mostrar();
        }
    }
}

?>
