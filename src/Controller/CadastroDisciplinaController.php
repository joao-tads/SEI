<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Disciplina;
use Ifnc\Tads\Helper\Transaction;

class  CadastroDisciplinaController implements IController
{

    public function request(): void
    {
        $disciplina = new Disciplina();
        if(!empty($_POST['id'])) {
            $disciplina->id = $_POST['id'];
        }

        $disciplina->nome = $_POST['nome'];
        $disciplina->idProfessor = $_POST['professor'];
        
        var_dump($disciplina);
        Transaction::open();
        $disciplina->store();
        Transaction::close();

        header('Location: /list-team', true, 302);
        exit();
    }
}
