<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class PrimeiroLoginFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "primeiro-login.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION["usuario"],
                "titulo"=>"Primeiro Login"
            ]);
            
    }
}