<?php
namespace App\controller;

use App\Models\banco;
use App\Models\Cliente;
use App\Models\Empresa;
use App\View\BancoVista;

class BancoController {
    private $banco;
    private $vista;

    public function __construct(Banco $banco, BancoVista $vista) {
        $this->banco = $banco;
        $this->vista = $vista;

        if (isset($_POST['registrarCliente'])) {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $documento = $_POST['documento'];
            $cliente = new Cliente($nombre, $edad, $documento);
            $this->banco->agregarCliente($cliente);
        }

        if (isset($_POST['registrarEmpresa'])) {
            $nombre = $_POST['nombreEmpresa'];
            $nit = $_POST['nit'];
            $empresa = new Empresa($nombre, $nit);
            $this->banco->agregarEmpresa($empresa);
        }
    }

    public function mostrarResultados() {
        $this->vista->mostrarClientes($this->banco->getClientes());
        $this->vista->mostrarEmpresas($this->banco->getEmpresas());
        $this->vista->mostrarTotalPersonas(\App\Models\Persona::getTotalPersonas());
    }
}
