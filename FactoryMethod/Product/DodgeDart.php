<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Dodge Dart\n";
    }

    public function frear(): void
    {
        echo "Freando Dodge Dart\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha Dodge Dart\n";
    }
}
