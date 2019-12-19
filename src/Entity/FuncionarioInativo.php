<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class FuncionarioInativo extends Record
{
    public $id;
    public $nome;
    public $cpf;
    public $email;
    public $telefone;
    public $cargo;
    public $dataNascimento;
    public $senha;
    public $nlogin;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }

    public function verificar($cpf){
        return ($cpf==$this->cpf);
    }

}