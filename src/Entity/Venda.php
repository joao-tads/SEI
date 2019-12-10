<?php
namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Helper\Record;

class Venda extends Record
{
    public $id;
    public $cliente;
    public $itens;
    public $data;

    public function store(){
        parent::store();

    }

    public function addItem($item)
    {
        $this->itens[] = $item;
    }

    public function getItens()
    {
        return $this->itens;
    }
}
