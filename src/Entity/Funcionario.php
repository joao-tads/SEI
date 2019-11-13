<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Funcionario extends Record
{
    public $matricula;
    public $usuario;
    public $senha;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }
}