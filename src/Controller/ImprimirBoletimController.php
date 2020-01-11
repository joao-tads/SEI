<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ImprimirBoletimController implements IController
{
    public function request(): void
    {
        Transaction::open();

        echo Render::html(
            [
                "imprimirB.php",
            ],
            [
                "usuario" => $_SESSION["usuario"],
                "boletim" => SelectPro::boletim($_SESSION["usuario"]->id)
            ]
        );
    }
}
