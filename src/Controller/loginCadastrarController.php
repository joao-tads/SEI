<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;


class LoginCadastrarController implements IController
{
    public function request(): void
    {
        $funcionario = new Funcionario();
        $funcionario->usuario = $_POST['usuari0'];
        $funcionario->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);

        Transaction::open();
        $funcionario->store();
        Transaction::close();
        header('Location: /login-form', true, 302);
        exit();
    }
}