<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class verificarFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "form-verificar.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Verificar"
            ]);
            
    }
}