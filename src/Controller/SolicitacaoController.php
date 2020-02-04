<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Solicitacao;
use Ifnc\Tads\Helper\Transaction;

class  SolicitacaoController implements IController
{

    public function request(): void
    {
        $solicitacao = new Solicitacao();
        $request = new Disciplina;
        $request2 = new Funcionario();

        if(!empty($_POST['idAluno'])) {
            $solicitacao->idAluno = $_POST['idAluno'];
        }
        Transaction::open();

        $solicitacao->idDisciplina = $_POST['idDisciplina'];
        $solicitacao->tipo = $_POST['tipo'];
        $solicitacao->idDisciplina = $_POST['idDisciplina'];
        $request =  Disciplina::findByCondition("id='{$_POST['idDisciplina']}'");
        $request2 = Funcionario::findByCondition("id='{$request->idProfessor}'");

        $solicitacao->descricao = $request->nome." - ".$request2->nome;
        
        var_dump($solicitacao);
        $solicitacao->store();
        Transaction::close();

        header('Location: /disciplinas-aluno', true, 302);
        exit();
    }
}
