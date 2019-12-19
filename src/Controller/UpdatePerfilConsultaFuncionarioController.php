<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class  UpdatePerfilConsultaFuncionarioController implements IController
{

    public function request(): void
    {
        $funcionario = new Funcionario();
        if(!empty($_POST['id'])) {
            $funcionario->id = $_POST['id'];
        } 
        $funcionario->nome = $_POST['nome'];
        $funcionario->idade = $_POST['idade'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->cargo = $_POST['cargo'];
        
        
        var_dump($funcionario);
        Transaction::open();
        $funcionario->store();
        Transaction::close();

        header('Location: /Consultar', true, 302);
        exit();
    }
}
