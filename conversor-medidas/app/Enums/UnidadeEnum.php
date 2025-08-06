<?php

namespace App\Enums;

class UnidadeEnum
{
    const MM = 'Milímetros';
    const CM = 'Centímetros';
    const M = 'Metros';
    const KM = 'Quilômetros';

    public static function getAll()
    {
        return
        [
            0 => self::MM,
            1 => self::CM,
            2 => self::M,
            3 => self::KM,
        ];
    }
}
