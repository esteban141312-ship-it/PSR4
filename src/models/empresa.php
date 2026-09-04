<?php
namespace App\models;

class Empresa {
    private $nombre;
    private $nit;

    public function __construct($nombre, $nit) {
        $this->nombre = $nombre;
        $this->nit = $nit;
    }

    public function mostrarInfo() {
        echo " Empresa: $this->nombre | NIT: $this->nit<br>";
    }
}
