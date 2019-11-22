<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class  CadastroController implements IController
{

    public function request(): void
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $_POST['nome'];
        $funcionario->idade = $_POST['idade'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->cargo = $_POST['cargo'];
        $funcionario->senha = password_hash($_POST['cpf'], PASSWORD_ARGON2I);
        
        var_dump($funcionario);
        Transaction::open();
        $funcionario->store();
        Transaction::close();

        //header('Location: /Painel-inicial', true, 302);
        exit();
    }
}
