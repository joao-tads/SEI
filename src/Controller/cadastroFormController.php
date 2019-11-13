<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class cadastroFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "form-cadastro.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Cadastro"
            ]);
            
    }
}