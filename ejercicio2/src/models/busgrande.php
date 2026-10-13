<?php
namespace App\models;

class busgrande extends bus {


	public function __construct(string $placa)
    {
        return parent::__construct($placa, 40);

     
    }


   

}