<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\FuncionarioInativo;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class  InativeFuncionarioController implements IController
{

    public function request(): void
    {
        $funcionario = new Funcionario();
        $funcionario = Funcionario::findByCondition("id='{$_POST['id']}'");
        $func = new FuncionarioInativo();

        $func->nome = $funcionario->nome;
        $func->cpf = $funcionario->cpf;
        $func->email = $funcionario->email;
        $func->telefone = $funcionario->telefone;
        $func->dataNascimento = $funcionario->dataNascimento;
        $func->cargo = $funcionario->cargo;
        $func->senha = $funcionario->senha;
        $func->nlogin = $funcionario->nlogin;
        
        Transaction::open();
        $func->store();
        $funcionario->delete($_POST['id']);
        Transaction::close();

        var_dump($func);
        header('Location: /consultar', true, 302);
        exit();
    }
}
