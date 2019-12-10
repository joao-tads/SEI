<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Transaction;

class  MatricularController implements IController
{

    public function request(): void
    {
        $aluno = new Aluno();
        $aluno->nome = $_POST['nome'];
        $aluno->dataNascimento = $_POST['dataNascimento'];
        $aluno->nomeMae = $_POST['nomeMae'];
        $aluno->nomePai = $_POST['nomePai'];
        $aluno->rg = $_POST['rg'];
        $aluno->cpf = $_POST['cpf'];
        $aluno->naturalidade = $_POST['naturalidade'];
        $aluno->endereco = $_POST['endereco'];
        $aluno->telefone = $_POST['telefone'];
        $aluno->sexo = $_POST['sexo'];
        $aluno->usuario = $_POST['usuario'];
        $aluno->senha = password_hash($_POST['cpf'], PASSWORD_ARGON2I);
        $aluno->nlogin = 0;
        var_dump($aluno);
        Transaction::open();
        $aluno->store();
        Transaction::close();

        header('Location: /Pagina-inicial', true, 302);
        exit();
    }
}
