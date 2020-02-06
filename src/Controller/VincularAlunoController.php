<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Solicitacao;
use Ifnc\Tads\Entity\DisciplinaAluno;
use Ifnc\Tads\Entity\DisciplinaTurma;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class  VincularAlunoController implements IController
{
    use Flash;
    public function request(): void
    {
        $da = new DisciplinaAluno();
        $dt = new DisciplinaTurma();
        $soli = new Solicitacao();

        if(!empty($_POST['idDisciplina'])) { 
            $da->idDisciplina = $_POST['idDisciplina'];
            $dt->idDisciplina = $_POST['idDisciplina'];

        }
        if(!empty($_POST['idAluno'])) {
            $da->idAluno = $_POST['idAluno'];
            $dt->idAluno = $_POST['idAluno'];
        }
        if(!empty($_POST['idTurma'])) {
            $dt->idTurma = $_POST['idTurma'];
        } else {
            $this->create(
                new Message(
                    "Aluno Não Vinculado a uma turma!",
                    "alert-danger"
                )
            );
header('Location: /solicitacoes', true, 302);        }
        $dt->ano = date('Y');
        $soli->id = $_POST['id'];
        
        var_dump($dt);
        
        Transaction::open();
        $da->store();
        $dt->store();
        $soli->delete("id='{$_POST['id']}'");
        Transaction::close();
        

        header('Location: /solicitacoes', true, 302);
        exit();
        
    }
}
