<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\SelectPro;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class BoletimController implements IController
{
    public function request(): void
    {
        Transaction::open();
        $tes = SelectPro::boletim(1);

        var_dump($tes);
        /*
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "boletim.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "boletim" => SelectPro::boletim(1)
            ]
        ); */
    }
}
