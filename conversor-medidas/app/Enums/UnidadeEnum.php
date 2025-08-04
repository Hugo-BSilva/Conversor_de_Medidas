<?php

namespace App\Enums;

class UnidadeEnum
{
    const MM = 'milimetros';
    const CM = 'centimetros';
    const M = 'metros';
    const KM = 'quilometros';

    public static function getAll()
    {
        return [
            self::MM,
            self::CM,
            self::M,
            self::KM,
        ];
    }
}
