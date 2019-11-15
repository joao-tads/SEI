<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Responsavel extends Record
{
    public $id;
    public $nome;
    public $idAluno;
    public $cpf;
    public $rg;
    public $usuario;
    public $senha;
}