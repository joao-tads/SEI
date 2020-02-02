<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\DisciplinaAluno;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class DisciplinasAlunoController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "disciplinas-aluno.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "boletim" => SelectPro::boletim($_SESSION["usuario"]->id),
                "funcionario" => Funcionario::all(),
                "disciplina" => Disciplina::all()
            ]
        );
    }
}
