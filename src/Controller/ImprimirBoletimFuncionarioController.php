<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ImprimirBoletimFuncionarioController implements IController
{
    public function request(): void
    {
        Transaction::open();

        echo Render::html(
            [
                "imprimirBoletim.php",
            ],
            [
                "usuario" => $_SESSION["usuario"],
                "aluno" => Aluno::findByCondition("id='{$_GET['id']}'"),
                "turma" => Turma::findByCondition("idAluno='{$_GET['id']}'"),
                "boletim" => SelectPro::boletim($_GET["id"])
            ]
        );
    }
}
