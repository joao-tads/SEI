<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Transaction;

class  PrimeiroLoginController implements IController
{

    public function request(): void
    {
        $c = $_POST["cargo"];
        if ($c=="Professor" || $c == "Coordenador" || $c == "Secretaria" || $c == "Direcao") {
            $user = new Funcionario();
            $user->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        } else {
            $user = new Aluno();
            $user->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        }

        $user->id = $_POST['id'];
        $user->nlogin = 1;

        if ($_POST['senha'] == $_POST['confirmeSenha']) {
            Transaction::open();
            $user->store();
            Transaction::close();
            header('Location: /Pagina-inicial');
            exit();
        }
        header('Location: /primeiro-login', true, 302);
        exit();
    }
}
