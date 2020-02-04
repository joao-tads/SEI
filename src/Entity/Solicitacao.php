<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Solicitacao extends Record
{
    public $id;
    public $tipo;
    public $descricao;
    public $idAluno;
    public $idDisciplina;
}