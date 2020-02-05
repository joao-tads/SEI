<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;


class PrimeiroLoginFormController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "primeiro-login.php",
                "rodape.php"
            ],
            [
                "type" => $_SESSION["type"],
                "usuario" => $_SESSION["usuario"],
                "titulo"=>"Primeiro Login"
            ]);
            
    }
}