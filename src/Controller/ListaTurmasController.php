<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class ListaTurmasController implements IController
{
    public function request(): void
    {
        Transaction::open();
        
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "lista-turma.php",
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
