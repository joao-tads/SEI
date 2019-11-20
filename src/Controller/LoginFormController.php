<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Flash;

class LoginFormController implements IController
{
    use Flash;
    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "login-form.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Escola",
                "alerts" =>$this->useAll()
            ]);
            
    }
}