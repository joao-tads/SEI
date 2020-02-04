<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Frequencia;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class InserirFrequenciasController implements IController
{
    public function request(): void
    {
        echo "Até aqui ainda vai";
        Transaction::open();
            $dt = SelectPro::InserirNotas($_SESSION["usuario"]->id, $_GET['id']);
        Transaction::close();

        $new = new Frequencia();
        foreach ($dt as $d) {
            $new->idProfessor = $_SESSION["usuario"]->id;
            $new->idAluno = $_POST['idAluno-'.$d->id];
            $new->idTurma = $_POST['idTurma-'.$d->id];
            $new->data = $_POST['data'];
            $new->status = $_POST['status-'.$d->id];
            var_dump($new);
            Transaction::open();
            $new->store();
            Transaction::close();
        }
        header('Location: /inserir-frequencia?id='.$_GET['id'], true, 302);
        exit();
    }
}
