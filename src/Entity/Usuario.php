<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Usuario extends Record
{
    public $id;
    public $email;
    public $senha;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }
}