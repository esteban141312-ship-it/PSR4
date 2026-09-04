<?php
namespace App\models;

class Banco {
    private $clientes = [];
    private $empresas = [];

    public function agregarCliente(Cliente $c) {
        $this->clientes[] = $c;
    }

    public function agregarEmpresa(Empresa $e) {
        $this->empresas[] = $e;
    }

    public function getClientes() {
        return $this->clientes;
    }

    public function getEmpresas() {
        return $this->empresas;
    }
}
