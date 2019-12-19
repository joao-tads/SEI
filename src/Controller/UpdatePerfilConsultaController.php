<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Transaction;

class  UpdatePerfilConsultaController implements IController
{

    public function request(): void
    {
        $aluno = new Aluno();
        $aluno->id = $_POST['id'];
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
        $aluno->senha = $_POST['senha'];
        var_dump($aluno);
        Transaction::open();
        $aluno->store();
        Transaction::close();

        header('Location: /consultar', true, 302);
        exit();
    }
}
