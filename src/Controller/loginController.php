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
                    "CPF vazio!",
                    "alert-danger"
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

        if (is_null($senha) || $senha == false) {
            $this->create(
                new Message(
                    "Senha vazia!",
                    "alert-danger"
                )
            );
            header('Location: /login-form');
            exit();
        }

        Transaction::open();
        $usuario = Funcionario::findByCondition("cpf='{$_POST['cpf']}'");
        if (!$usuario) {
            $usuario = Aluno::findByCondition("cpf='{$_POST['cpf']}'");
            if (!$usuario) {
                $this->create(
                    new Message(
                        "CPF inválido!",
                        "alert-danger"
                    )
                );
                var_dump($usuario);
                header('Location: /login-form');
                exit();
            } else if (!$usuario->valide($senha)) {
                $this->create(
                    new Message(
                        "Senha inválida!",
                        "alert-danger"
                    )
                );
                var_dump($usuario);
                header('Location: /login-form');
                exit();
            } else {
                if ($usuario->nlogin == 0) {
                    $_SESSION["type"] = "Aluno";
                    $_SESSION["usuario"] = $usuario;
                    header('Location: /primeiro-login');
                    exit();
                }
                $_SESSION["type"] = "Aluno";
                $_SESSION["usuario"] = $usuario;
                header('Location: /Pagina-inicial');
                exit();
            }
        } else if (!$usuario->valide($senha)) {
            $this->create(
                new Message(
                    "Senha inválida!",
                    "alert-danger"
                )
            );
            header('Location: /login-form');
            exit();
        }
        if ($usuario->nlogin == 0) {
            $_SESSION["type"] = "Funcionario";
            $_SESSION["usuario"] = $usuario;
            header('Location: /primeiro-login');
            exit();
        }
        $_SESSION["type"] = "Funcionario";
        $_SESSION["usuario"] = $usuario;
        header('Location: /Pagina-inicial');
        exit();
    }
}
