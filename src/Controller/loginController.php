<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Aluno;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class LoginController implements IController
{
    use Flash;

    public function request(): void
    {
        $cpf = filter_input(
            INPUT_POST,
            'cpf',
            FILTER_DEFAULT
        );

        if (is_null($cpf) || $cpf == false) {
            $this->create(
                new Message(
                    "alert-login",
                    "CPF vazio!",
                    "danger"
                )
            );
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
        if (!$usuario) {
            $usuario = Aluno::findByCondition("cpf='{$_POST['cpf']}'");
            if (!$usuario) {
                $this->create(
                    new Message(
                        "alert-login",
                        "CPF inválido!",
                        "danger"
                    )
                );
                var_dump($usuario);
                header('Location: /login-form');
                exit();
            } else if (!$usuario->valide($senha)) {
                $this->create(
                    new Message(
                        "alert-login",
                        "Senha inválida!",
                        "danger"
                    )
                );
                var_dump($usuario);
                header('Location: /login-form');
                exit();
            }
            $this->create(
                new Message(
                    "alert-login",
                    "CPF inválida!",
                    "danger"
                )
            );
            header('Location: /login-form');
            exit();
        } else if (!$usuario->valide($senha)) {
            $this->create(
                new Message(
                    "alert-login",
                    "Senha inválida!",
                    "danger"
                )
            );
            header('Location: /login-form');
            exit();
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
