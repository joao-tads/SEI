<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Projeto extends Record
{
    public $id;
    public $tema;
    public $arquivo;
    public $dataPublicacao;
    public $periodo;
}