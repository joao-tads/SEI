<?php

namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Produto extends Record
{
    public $id;
    public $descricao;
    public $estoque;
    public $preco_custo;
    public $preco_venda;
    public $codigo_barras;
    public $data_cadastro;
    public $origem;

    public function getTotalCusto(){
        return $this->estoque * $this->preco_custo;
    }

}