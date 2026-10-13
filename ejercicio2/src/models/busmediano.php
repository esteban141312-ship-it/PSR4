<?php
namespace App\models;

class busmediano extends bus {


	public function __construct(string $placa)
    {
        return parent::__construct($placa, 30);

    }

}