<?php
namespace App\models;

class Cliente extends Persona {
    public function mostrarInfo() {
        echo " Cliente: $this->nombre | Edad: $this->edad | Documento: $this->documento<br>";
    }
}
