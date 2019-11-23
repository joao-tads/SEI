<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Transaction;

class RecuperarSenhaController implements IController
{

    public function request(): void
    {
        $id = filter_input(
            INPUT_POST,
            'id',
            FILTER_DEFAULT
        );

        if (is_null($id) || $id === false) {
            header('Location: /recuperar-senha');
            exit();
        }

        $cpf = filter_input(
            INPUT_POST,
            'cpf',
            FILTER_DEFAULT
        );

        if (is_null($cpf) || $cpf === false) {
            header('Location: /recuperar-senha');
            exit();
        }

        $dataNascimento = filter_input(
            INPUT_POST,
            'dataNascimento',
            FILTER_DEFAULT
        );

        if (is_null($dataNascimento) || $dataNascimento === false) {
            header('Location: /recuperar-senha');
            exit();
        }

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        $confirmarSenha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        Transaction::open();
        $usuario = Aluno::findByCondition("cpf='{$cpf}'");
        if (isset($usuario->cpf) && $usuario->verificar($cpf) && ($senha == $confirmarSenha)) {
            var_dump($usuario);
            $user = new Aluno();
            $user->id = $id;
            $user->dataNascimento = $dataNascimento;
            $user->cpf = $cpf;
            $user->senha = password_hash($senha, PASSWORD_ARGON2I);

            $user->store();
            Transaction::close();
            header('Location: /login-form', true, 302);
            exit();
        } else {

            $usuario = Funcionario::findByCondition("cpf='{$cpf}'");
            if (isset($usuario->cpf) && $usuario->verificar($cpf) && ($senha == $confirmarSenha)) {
                var_dump($usuario);
                $user = new Funcionario();
                $user->id = $id;
                $user->dataNascimento = $dataNascimento;
                $user->cpf = $cpf;
                $user->senha = password_hash($senha, PASSWORD_ARGON2I);

                $user->store();
                Transaction::close();
                header('Location: /login-form', true, 302);
                exit();
            }
            Transaction::close();
            header('Location: /recuperar-senha');
            exit();
        }
    }
}
