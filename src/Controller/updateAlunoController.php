<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class UpdateAlunoController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "menu.php",
                "update-aluno-form.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION["usuario"]
            ]);
            
    }
}