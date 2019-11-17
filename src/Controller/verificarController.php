<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class VerificarController implements IController
{

    public function request(): void
    {
        $id = filter_input(INPUT_POST,
            'id',
            FILTER_DEFAULT
        );

        if (is_null($id) || $id === false) {
            header('Location: /form-verificar');
            exit();
        }

        $cpf = filter_input(INPUT_POST,
            'cpf',
            FILTER_DEFAULT
        );

        if (is_null($cpf) || $cpf === false) {
            header('Location: /form-verificar');
            exit();
        }

        $usuario = filter_input(INPUT_POST,
            'usuario',
            FILTER_DEFAULT
        );

        if (is_null($usuario) || $usuario === false) {
            header('Location: /login-form');
            exit();
        }

        $senha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);

        Transaction::open();
        $usuario = Funcionario::findByCondition("id='{$_POST['id']}'");
        if ($usuario->verificar($cpf)) {
            var_dump($usuario);
            $funcionario = new Funcionario();
            $funcionario->id = $_POST['id'];
            $funcionario->usuario = $_POST['usuario'];
            $funcionario->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);

            Transaction::open();
            $funcionario->store();
            Transaction::close();
            header('Location: /login-form', true, 302);
        exit();
        }
        header('Location: /verificar-form');
        exit();
    }
}