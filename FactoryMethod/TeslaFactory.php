<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, TeslaModeloX, TeslaModeloS
};

class TeslaFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == ModeloCarro::TESLA_X) {
            return new TeslaModeloX();
        }

        if ($modeloCarro == ModeloCarro::TESLA_S) {
            return new TeslaModeloS();
        }

        throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema");

    }
}
