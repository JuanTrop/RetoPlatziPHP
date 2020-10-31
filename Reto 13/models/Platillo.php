<?php

namespace Reto_13;

class Platillo {
    private $nombre;
    private $precio;

    public function getPropina($porcentaje){
        return $this->precio * $porcentaje;
    }

    function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }
}