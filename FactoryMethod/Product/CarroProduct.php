<?php

namespace FactoryMethod\Product;

interface CarroProduct
{
    public function acelerar(): void;
    public function frear(): void;
    public function trocarMarcha(): void;
}
