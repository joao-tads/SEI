<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Solicitacao;
use Ifnc\Tads\Entity\DisciplinaTurma;
use Ifnc\Tads\Helper\Transaction;

class  VincularAlunoController implements IController
{

    public function request(): void
    {

        $aluno = new DisciplinaTurma();
        $solid = new Solicitacao();
        if(!empty($_POST['idDisciplina'])) {
            $aluno->idDisciplina = $_POST['idDisciplina'];
        }
        if(!empty($_POST['idAluno'])) {
            $aluno->idAluno = $_POST['idAluno'];
        }
        if(!empty($_POST['idTurma'])) {
            $aluno->idTurma = $_POST['idTurma'];
        }
        $aluno->ano = date('Y');
        $solid->id = $_POST['id'];
        
        var_dump($aluno);
        
        Transaction::open();
        
        $aluno->store();
        $solid->delete("id='{$solid->id}'");
        Transaction::close();
        

        header('Location: /solicitacoes', true, 302);
        exit();
        
    }
}
