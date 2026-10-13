<?php
// require_once __DIR__ ."/cliente.php";
namespace App\models;
use App\models\cliente;
class empresa extends cliente {
    private $nit;
    private $representante;

    public function __construct($nit, $nombre, $representante){
        parent::__construct($nombre);
        $this->nit = $nit;
        $this->representante = $representante;


    }

    public function getIdentificacion()
    {
     return $this->nit;   
    }

    public function getRepresentante(){
        return $this->representante;
    }

    public function cambiarRepres($repres){
        $this->representante = $repres;
    }
}