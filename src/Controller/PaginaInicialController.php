<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;

class PaginaInicialController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "pagina-inicial.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION["usuario"]
            ]
        );
    }
}
