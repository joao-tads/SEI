<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Helper\Transaction;

class  PrimeiroLoginController implements IController
{

    public function request(): void
    {
        $i = "";
        $c = $_POST["cargo"];
        if ($c=="Professor(a)" || $c == "Coordenador(a)" || $c == "Secretario(a)" || $c == "Diretor(a)") {
            $user = new Funcionario();
            $user->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
            $i = "Funcionario";
        } else {
            $user = new Aluno();
            $user->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
            $i = "Aluno";
        }

        $user->id = $_POST['id'];
        $user->nlogin = 1;

        if ($_POST['senha'] == $_POST['confirmeSenha']) {
            Transaction::open();
            $user->store();
            Transaction::close();
            if($i == "Aluno") {
                header('Location: /Pagina-inicial');
                exit();
            }
            header('Location: /Painel-inicial');
            exit();
        }
        header('Location: /primeiro-login', true, 302);
        exit();
    }
}
