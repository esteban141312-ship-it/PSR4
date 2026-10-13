<?php
// require_once __DIR__ . "/persona.php";
namespace App\models;
use App\models\Persona;
class docente extends Persona {
    private $cursosDictados = [];

    public function asignarCurso($curso) {
        $this->cursosDictados[] = $curso;
    }

    public function registrarCalificacion($estudiante, $curso, $nota) {
        $estudiante->registrarNota($curso, $nota);
    }

    public function mostrarInfo() {
        echo " Docente: $this->nombre | Doc: $this->documento | Correo: $this->correo<br>";
    }
}
