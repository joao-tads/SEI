<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class InserirNotasFormController implements IController
{
    public function request(): void
    {
        Transaction::open();

        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "inserir-notas.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "alunos" => SelectPro::InserirNotas($_SESSION["usuario"]->id, $_GET["id"])
            ]
        );
    }
}
