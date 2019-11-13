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
            header('Location: /form-verificar');
            exit();
        }

        $cpf = filter_input(INPUT_POST,
            'cpf',
            FILTER_DEFAULT
        );

        Transaction::open();
        $usuario = Funcionario::findByCondition("matricula='{$_POST['matricula']}'");
        if (!$usuario || !$usuario->verificar($cpf)) {
            var_dump($usuario);
            header('Location: /verificar-form');
            exit();
        }
        header('Location: /cadastro-form');
        exit();
    }
}