<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Turma extends Record
{
    public $id;
    public $nome;
    public $turno;
    public $anoSerie;
    public $min;
    public $max;
    public $idAluno;
}