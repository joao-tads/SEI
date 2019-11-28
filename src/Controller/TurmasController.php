<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class TurmasController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "turmas.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "turmas" => Turma::all()  
            ]
        );
    }
}
