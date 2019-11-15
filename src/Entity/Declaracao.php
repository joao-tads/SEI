<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Declaracao extends Record
{
    public $id;
    public $dataPedido;
    public $solicitante;
    public $status;
}