<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class BoletimController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "boletim.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION["usuario"]
            ]
        );
    }
}
