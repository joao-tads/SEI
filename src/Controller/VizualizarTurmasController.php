<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class VizualizarTurmasController implements IController
{
    public function request(): void
    {
        Transaction::open();
        
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "vizualizar-turmas.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "t" => SelectPro::turmasAll(),
                "aluno" => Turma::findByCondition("nome='{$_POST['nome']}' AND anoSerie='{$_POST['anoSerie']}' AND turno='{$_POST['turno']}'"),
                "alunos" => SelectPro::turmasAlunos($_POST['nome'], $_POST['turno']) 
            ]
        );
    }
}
