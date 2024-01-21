<?php

namespace FactoryMethod;

class ModeloCarro {
    public const TESLA_S = 'modelo_s';
    public const TESLA_X = 'modelo_x';
    public const DODGE_CHARGER = 'charger';
    public const DODGE_DART = 'dart';

    public static function getModelos(): array {
        return [self::TESLA_S, self::TESLA_X, self::DODGE_CHARGER, self::DODGE_DART];
    }
}
