<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\DisciplinaAluno;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class DisciplinaAlunoController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "disciplinas-alunos.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "disciplina" => Disciplina::all(),
                "funcionario" => Funcionario::all(),
                "da" => DisciplinaAluno::all(),
                "aluno" => Aluno::all()  
            ]
        );
    }
}
