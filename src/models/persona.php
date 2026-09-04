<?php
namespace App\models;

abstract class Persona {
    protected $nombre;
    protected $edad;
    protected $documento;
    protected static $totalPersonas = 0;

    public function __construct($nombre, $edad, $documento) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->documento = $documento;
        self::$totalPersonas++;
    }

    public static function getTotalPersonas() {
        return self::$totalPersonas;
    }

    abstract public function mostrarInfo();
}
