<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Turma extends Record
{
    public $id;
    public $nome;
    public $min;
    public $max;
    public $turno;
    public $anoSerie;
}