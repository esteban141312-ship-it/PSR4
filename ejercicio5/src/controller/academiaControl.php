<?php
namespace App\controller;
use App\models\Persona;
use App\models\estudiante;
use App\models\administrativo;
use App\models\docente;
class academiaControl {
    private $personas = [];
    private $vista;

    public function __construct($vista) {
        $this->vista = $vista;

        if (isset($_POST['registrarPersonas'])) {
            $nombres = $_POST['nombre'];
            $documentos = $_POST['documento'];
            $correos = $_POST['correo'];
            $tipos = $_POST['tipo'];

            for ($i = 0; $i < count($nombres); $i++) {
                if (!empty($nombres[$i]) && Persona::validarDocumento($documentos[$i]) && filter_var($correos[$i], FILTER_VALIDATE_EMAIL)) {
                    switch ($tipos[$i]) {
                        case "estudiante":
                            $this->personas[] = new estudiante($nombres[$i], $documentos[$i], $correos[$i]);
                            break;
                        case "docente":
                            $this->personas[] = new docente($nombres[$i], $documentos[$i], $correos[$i]);
                            break;
                        case "administrativo":
                            $this->personas[] = new administrativo($nombres[$i], $documentos[$i], $correos[$i]);
                            break;
                    }
                }
            }
        }
    }

    public function mostrarResultados() {
        $this->vista->mostrarPersonas($this->personas);
        $this->vista->mostrarTotal();
    }

    public function getPersonas() {
        return $this->personas;
    }
}
