<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class EmailController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "email.php"
            ],
            [
                "usuario" => $_SESSION["usuario"],
                "type" => $_SESSION["type"]
            ]
        );
    }
}
