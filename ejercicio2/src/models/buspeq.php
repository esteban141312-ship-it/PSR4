<?php
namespace App\models;

class buspequeño extends bus {


	public function __construct(string $placa)
    {
        return parent::__construct($placa, 14);

   
    }

}