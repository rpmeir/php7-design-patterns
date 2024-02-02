<?php

namespace Observer;

class ControleRequisicoesCompraObserver implements Observer
{
    public function atualizado(string $codigo): void
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    public function adicionaListaRequisicaoCompra(string $codigo): void
    {
        echo  "Produto adicionado à lista de requisições de compra do código $codigo" . PHP_EOL;
    }
}
