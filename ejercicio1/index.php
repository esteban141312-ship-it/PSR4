<?php
// require_once __DIR__ . "/controller/controladorcita.php";
// require_once __DIR__ . "/view/consultausuario.php";
// require_once __DIR__ . "/view/visualizarcita.php";
require_once __DIR__ . '/vendor/autoload.php';
use App\controller\controladorcita;
use App\view\consultausuario;
use App\view\visualizarcita;


if (!isset($_POST["numero"], $_POST["tipo"], $_POST["tarifa"])) {

    $formulario = new consultausuario();
    $formulario->mostrar();

} else {

    $vista = new visualizarcita();
    $controlador = new controladorcita($vista);
    $controlador->demostrar();

}
