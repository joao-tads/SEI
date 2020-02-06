<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class ConsultarController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "consultar.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION['usuario'],
                "type" => $_SESSION['type'],
                "t" => SelectPro::turmasAll(),
                "funcionarios" => Funcionario::all(),
                "alunos" => Aluno::all()            ]
        );
    }
}