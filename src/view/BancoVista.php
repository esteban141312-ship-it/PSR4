<?php
namespace App\view;

class BancoVista {
    public function mostrarClientes($clientes) {
        echo "<h3>Clientes</h3>";
        foreach ($clientes as $c) {
            $c->mostrarInfo();
        }
    }

    public function mostrarEmpresas($empresas) {
        echo "<h3>Empresas</h3>";
        foreach ($empresas as $e) {
            $e->mostrarInfo();
        }
    }

    public function mostrarTotalPersonas($total) {
        echo "<h3>Total de personas: $total</h3>";
    }
}
