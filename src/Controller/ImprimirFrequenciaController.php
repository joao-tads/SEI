<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Turma;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ImprimirFrequenciaController implements IController
{
    public function request(): void
    {
        Transaction::open();

        echo Render::html(
            [
                "imprimirF.php"
            ],
            [
                "usuario" => $_SESSION["usuario"],
                "turma" => Turma::findByCondition("idAluno='{$_SESSION['usuario']->id}'")
            ]
        );
    }
}
