<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Transaction;

class RecuperarSenhaController implements IController
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

        $dataNascimento = filter_input(INPUT_POST,
            'dataNascimento',
            FILTER_DEFAULT
        );

        if (is_null($dataNascimento) || $dataNascimento === false) {
            header('Location: /recuperar-senha');
            exit();
        }

        $senha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);
        
        $confirmarSenha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);

        Transaction::open();
        $usuario = Aluno::findByCondition("id='{$_POST['id']}'");
        if ($usuario->verificar($dataNascimento) && ($senha == $confirmarSenha)) {
            var_dump($usuario);
            $aluno = new Aluno();
            $aluno->id = $_POST['id'];
            $aluno->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);

            Transaction::open();
            $aluno->store();
            Transaction::close();
            header('Location: /login-form', true, 302);
        exit();
        }
        header('Location: /recuperar-senha');
        exit();
    }
}