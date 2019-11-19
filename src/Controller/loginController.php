<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class LoginController implements IController
{

    public function request(): void
    {
        $cpf = filter_input(
            INPUT_POST,
            'cpf',
            FILTER_DEFAULT
        );

        if (is_null($cpf) || $cpf == false) {
            header('Location: /login-form');
            exit();
        }

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        Transaction::open();
        $usuario = Funcionario::findByCondition("cpf='{$_POST['cpf']}'");
        if (!$usuario || !$usuario->valide($senha)) {
            $usuario = Aluno::findByCondition("cpf='{$_POST['cpf']}'");
            if (!$usuario || !$usuario->valide($senha)) {
                var_dump($usuario);
                header('Location: /login-form');
                exit();
            }
        }
        if ($usuario->nlogin == 0) {
            $_SESSION["usuario"] = $usuario;
            header('Location: /primeiro-login');
            exit();
        }
        $_SESSION["usuario"] = $usuario;
        header('Location: /Pagina-inicial');
        exit();
    }
}
