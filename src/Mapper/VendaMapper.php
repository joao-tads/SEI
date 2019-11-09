<?php
namespace Ifnc\Tads\Mapper;
use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Item;
use Ifnc\Tads\Entity\Venda;

class VendaMapper
{
    public static function store(Venda $venda)
    {
        $venda->store();

        foreach ($venda->getItens() as $item)
        {
            $item->venda = $venda;
            $item->store();
        }
    }
    public static function find($id){
        $venda = Venda::find($id);
        $venda->cliente = Cliente::find($venda->cliente);
        $itens = Item::all("venda={$venda->id}");
        foreach ($itens as $item){
            $venda->addItem($item);
        }
        return $venda;
    }
    public static function all(): array{
        $vendas = Venda::all();
        foreach ($vendas as $venda){
            $venda->cliente = Cliente::find($venda->cliente);
            $itens = Item::all("venda={$venda->id}");
            foreach ($itens as $item){
                $venda->addItem($item);
            }
        }
        return $vendas;
    }
}
