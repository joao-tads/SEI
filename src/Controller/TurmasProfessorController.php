<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class TurmasProfessorController implements IController
{
    public function request(): void
    {
        Transaction::open();
        
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "turmas-professor.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "turmas" => SelectPro::turmasProfessor($_SESSION['usuario']->id)  
            ]
        );
    }
}
