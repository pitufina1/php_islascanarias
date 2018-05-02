<?php

require_once("pasajero.php");
require_once("ferry.php");

class Oficina {
    var $codigopostal;
    var $tarifas;

    function __construct ($codigopostal, $tarifas){
        $this->codigopostal = $codigopostal;
        $this->tarifas = array ();
    
    }

    function getCodigoPostal (){
        return $this->codigopostal;
    }

    function setCodigoPostal ($codigopostal){
        $this->codigopostal = $codigopostal;
    }

    
    function mostrar () {
        echo $this->getCodigoPostal()." <br>";

        for ($i=0; $i < count ($this->tarifas) ; $i++) { 
            $this->tarifas[$i]->mostrar();
        }
    }

    /* La funcion venderBilletes, digo yo que tiene que ser parecida a la 
    funcion matricularVehiculos que vimos en el ejercicio CONCESIONARIO */

    function altaPasajero ($pasajero){
        $this->pasajeros[] = $pasajero;
    }

    function bajaPasajero ($nif){
        $enc = false;
        for($i=0; $i<count($this->pasajeros) && ($enc==false); $i++){
            if($this->pasajeros[$i] != null){
                if($nif == $this->pasajeros[$i]->getPasajero()){
                    $this->pasajeros[$i] = null;
                    $enc = true;
                } 
            }
        }
    }

    //BUSCAR PRIMER BILLETE SIN VENDER Y CUANDO LO ENCUENTRE ME SALGO

    function rutasFerrys ($id){
        $aux = false;
        for($j=0; $j<count($this->ferrys($i)) && ($enc==false); $j++){
                if ($this->ferry[$i] != null){
                    if ($this->ferrys[$i]->getId() == $id) {
                        $islaorigen = count($this->ferrys[$i]->rutasFerryOrigen());
                        $islafinal = count($this->ferrys[$i]->rutasFerryDestino());
                        $enc = true;
                    } 
                }
            }
        }
        echo "El ferry ".$id." ha tenido ".$origen." rutas como origen, y ".$destino." rutas como destino";
    }

    function venderBillete (){
        $vaux = $this->mostrarBillete();
        $this->bajaVehiculo($vaux->getMatricula());
    }
}

?>
