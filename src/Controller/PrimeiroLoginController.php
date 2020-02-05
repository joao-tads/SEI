<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;


class  PrimeiroLoginController implements IController
{
    use Flash;

    public function request(): void
    {
        $c = $_POST["type"];
        if ($c == "Funcionario") {
            $user = new Funcionario();
            $user->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        } else {
            $user = new Aluno();
            $user->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        }

        $user->id = $_POST['id'];
        $user->nlogin = 1;

        if ($_POST['senha'] == $_POST['confirmeSenha']) {
            $this->create(
                new Message(
                    "Senha redefinida com sucesso!",
                    "alert-success"
                )
            );
            Transaction::open();
            $user->store();
            Transaction::close();
            
            header('Location: /Pagina-inicial');
            exit();
        }
        $this->create(
            new Message(
                "Senhas não conicidem!",
                "alert-danger"
            )
        );
        header('Location: /primeiro-login', true, 302);
        exit();
    }
}
