<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Frequencia extends Record
{
    public $id;
    public $idProfessor;
    public $idTurma;
    public $idAluno;
    public $data;
    public $status;
}