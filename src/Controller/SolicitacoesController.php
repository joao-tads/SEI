<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Solicitacao;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Transaction;

class SolicitacoesController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "lista-solicitacoes.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION['usuario'],
                "type" => $_SESSION['type'],
                "solicitacao" => Solicitacao::all(),
                "t" => Turma::all(),
                "dis" => Disciplina::all(),
                "alunos" => Aluno::all()            
            ]
        );
    }
}