<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Solicitacao;
use Ifnc\Tads\Helper\Transaction;

class  SolicitacaoController implements IController
{

    public function request(): void
    {
        $solicitacao = new Solicitacao();
        if(!empty($_POST['idAluno'])) {
            $solicitacao->idAluno = $_POST['idAluno'];
        }

        $solicitacao->tipo = $_POST['tipo'];
        $solicitacao->descricao = $_POST['descricao'];
        
        var_dump($solicitacao);
        Transaction::open();
        $solicitacao->store();
        Transaction::close();

        header('Location: /disciplinas-aluno', true, 302);
        exit();
    }
}
