<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class verificarController implements IController
{

    public function request(): void
    {
        $matricula = filter_input(INPUT_POST,
            'matricula',
            FILTER_DEFAULT
        );

        if (is_null($matricula) || $matricula === false) {
            header('Location: /login-form');
            exit();
        }

        $senha = filter_input(INPUT_POST,
            'cpf',
            FILTER_DEFAULT
        );

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