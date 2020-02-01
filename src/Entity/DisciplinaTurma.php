<?php


namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;

class DisciplinaTurma extends Record
{
    public $id;
    public $idDisciplina;
    public $idAluno;
    public $idTurma;
    public $ano;
    public $pb;
    public $sb;
    public $tb;
    public $qb;
}
