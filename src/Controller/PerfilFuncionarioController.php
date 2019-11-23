<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class PerfilFuncionarioController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menuAdmin.php",
                "perfil-funcionario.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION["usuario"]
            ]
        );
    }
}
