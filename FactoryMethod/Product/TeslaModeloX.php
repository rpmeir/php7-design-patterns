<?php

namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Tesla Modelo X\n";
    }

    public function frear(): void
    {
        echo "Freando Tesla Modelo X\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha Tesla Modelo X\n";
    }
}
