<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class PerfilController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "perfil.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"]
            ]
        );
    }
}
