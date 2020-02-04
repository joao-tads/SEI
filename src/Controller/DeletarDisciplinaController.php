<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Entity\DisciplinaAluno;
use Ifnc\Tads\Entity\DisciplinaTurma;
use Ifnc\Tads\Helper\Transaction;

class  DeletarDisciplinaController implements IController
{

    public function request(): void
    {
        $d = new Disciplina();
        $dt = new DisciplinaTurma();
        $da = new DisciplinaAluno();
        
        Transaction::open();
        
        
        if(!empty($_POST['id'])) {
            $d->id = $_GET['id'];
        }
            $dt->delete("idDisciplina='{$_GET['id']}'");
            $da->delete("idDisciplina='{$_GET['id']}'");
            $d->delete("id='{$_GET['id']}'");
        Transaction::close();

        header('Location: /list-team', true, 302);
        exit();
    }
}
