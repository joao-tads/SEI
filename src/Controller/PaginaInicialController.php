<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Flash;

class PaginaInicialController implements IController
{
    use Flash;
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "pagina-inicial.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "alerts" =>$this->useAll()
            ]
        );
    }
}
