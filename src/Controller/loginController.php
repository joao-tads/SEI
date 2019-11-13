<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class LoginController implements IController
{

    public function request(): void
    {
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
        $usuario = Funcionario::findByCondition("usuario='{$_POST['usuario']}'");
        if (!$usuario || !$usuario->valide($senha)) {
            var_dump($usuario);
            header('Location: /login-form');
            exit();
        }
        $_SESSION["usuario"]=$usuario;
        header('Location: /Pagina-inicial');
        exit();
    }
}