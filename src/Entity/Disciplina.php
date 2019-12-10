<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Disciplina extends Record
{
    public $id;
    public $nome;
    public $idProfessor;
    public $idAluno;
}