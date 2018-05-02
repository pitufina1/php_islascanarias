<?php

require_once("pasajero.php");
require_once("ruta.php");
require_once("oficina.php");
require_once("ferry.php");
require_once("vehiculo.php");
require_once("tarifa.php");

class AgenciaHermes {
    var $nombre;
    var $ferrys;

    function __construct ($nombre){
        $this->nombre = $nombre;
        $this->ferrys = $array ();
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }


    function mostrar () {
        for ($i=0; $i < count ($this->ferrys) ; $i++) { 
            $this->ferrys[$i]->mostrar();
        }
    }
}

?>
