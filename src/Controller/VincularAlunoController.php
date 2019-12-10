<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\DisciplinaAluno;
use Ifnc\Tads\Helper\Transaction;

class  VincularAlunoController implements IController
{

    public function request(): void
    {

        $aluno = new DisciplinaAluno();
        if(!empty($_POST['idDisciplina'])) {
            $aluno->idDisciplina = $_POST['idDisciplina'];
        }
        if(!empty($_POST['idAluno'])) {
            $aluno->idAluno = $_POST['idAluno'];
        }
        
        var_dump($aluno);
        Transaction::open();
        $aluno->store();
        Transaction::close();
        

        header('Location: /disciplinas', true, 302);
        exit();
    }
}
