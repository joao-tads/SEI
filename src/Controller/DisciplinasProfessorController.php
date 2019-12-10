<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class DisciplinasProfessorController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "disciplinas-professor.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "funcionario" => Funcionario::all(),
                "disciplina" => Disciplina::all()  
            ]
        );
    }
}
