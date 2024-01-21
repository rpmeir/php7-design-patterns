<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, DodgeCharger, DodgeDart
};

class DodgeFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == ModeloCarro::DODGE_CHARGER) {
            return new DodgeCharger();
        }

        if ($modeloCarro == ModeloCarro::DODGE_DART) {
            return new DodgeDart();
        }

        throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema");
    }
}
