<?php

namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Tesla Modelo S\n";
    }

    public function frear(): void
    {
        echo "Freando Tesla Modelo S\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha Tesla Modelo S\n";
    }
}
