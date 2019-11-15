<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Responsavel extends Record
{
    public $id;
    public $idAluno;
    public $idProfessor;
    public $nome;
    public $turno;
    public $anoOuSerie;
}