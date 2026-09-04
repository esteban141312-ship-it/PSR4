<?php
require __DIR__ . '/vendor/autoload.php';

use App\Models\Banco;
use App\View\BancoVista;
use App\Controller\BancoController;

$banco = new Banco();
$vista = new BancoVista();
$controller = new BancoController($banco, $vista);

// Formularios simples
echo '
<h3>Registrar Cliente</h3>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Edad: <input type="number" name="edad"><br>
    Documento: <input type="text" name="documento"><br>
    <input type="submit" name="registrarCliente" value="Registrar Cliente">
</form>

<h3>Registrar Empresa</h3>
<form method="post">
    Nombre: <input type="text" name="nombreEmpresa"><br>
    NIT: <input type="text" name="nit"><br>
    <input type="submit" name="registrarEmpresa" value="Registrar Empresa">
</form>
';

$controller->mostrarResultados();
