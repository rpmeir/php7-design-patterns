<?php

namespace Observer;

class EmailObserver implements Observer
{
    public function atualizado(string $codigo): void
    {
        $this->enviaEmailEstoqueZerado($codigo);
    }

    public function enviaEmailEstoqueZerado(string $codigo): void
    {
        echo "Email enviado para o setor de compras com o código $codigo" . PHP_EOL;
    }
}
