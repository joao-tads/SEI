<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Transaction;

class PerfilFuncionarioController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "perfil-funcionario.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "t" => SelectPro::turmasAll(),
                "usuario" => $_SESSION["usuario"]
            ]
        );
    }
}
