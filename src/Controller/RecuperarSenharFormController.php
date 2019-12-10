<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class RecuperarSenharFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "RecuperarSenhaForm.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Recuperar Senha"
            ]);
            
    }
}