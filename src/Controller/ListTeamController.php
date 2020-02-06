<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class ListTeamController implements IController
{
    public function request(): void
    {
        Transaction::open();

        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "disciplina.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "t" => SelectPro::turmasAll(),
                "funcionario" => Funcionario::all(),
                "disciplina" => Disciplina::all() 
            ]
        );
    }
}
