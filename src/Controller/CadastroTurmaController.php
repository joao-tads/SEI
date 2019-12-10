<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Transaction;

class  CadastroTurmaController implements IController
{

    public function request(): void
    {
        $turma = new Turma();
        if(!empty($_POST['id'])) {
            $turma->id = $_POST['id'];
        }

        $turma->nome = $_POST['nome'];
        $turma->min = $_POST['min'];
        $turma->max = $_POST['max'];
        $turma->turno = $_POST['turno'];
        $turma->anoSerie = $_POST['anoSerie'];
        
        var_dump($turma);
        Transaction::open();
        $turma->store();
        Transaction::close();

        header('Location: /turmas', true, 302);
        exit();
    }
}
