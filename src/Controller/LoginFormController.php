<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class LoginFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "login-form.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Login"
            ]);
    }
}