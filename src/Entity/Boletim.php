<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Boletim extends Record
{
    public $id;
    public $idAluno;
    public $disciplinas;
    public $notas;
}