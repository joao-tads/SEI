<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class AlunoInativo extends Record
{
    public $id;
    public $nome;
    public $dataNascimento;
    public $nomeMae;
    public $nomePai;
    public $rg;
    public $cpf;
    public $naturalidade;
    public $endereco;
    public $telefone;
    public $sexo;
    public $usuario;
    public $senha;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }

    public function verificar($cpf){
        return ($cpf==$this->cpf);
    }
}