<?php

namespace Adapter;

class Pedido
{
    protected string $numeroPedido;
    protected float $valorTotal;
    protected array $produtos;

    public function addProduto(string $produto): Pedido
    {
        $this->produtos[] = $produto;
        return $this;
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function getNumeroPedido(): string
    {
        return $this->numeroPedido;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function setNumeroPedido(string $numeroPedido): Pedido
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    public function setValorTotal(float $valorTotal): Pedido
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

}
