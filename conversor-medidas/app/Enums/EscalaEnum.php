<?php

namespace App\Enums;

class EscalaEnum
{
    const MILIMETRO = 0.001;
    const CENTIMETRO = 0.01;
    const METRO = 1;
    const QUILOMETRO = 1000;

    public static function getAll()
    {
        return [
            0 => self::MILIMETRO,
            1 => self::CENTIMETRO,
            2 => self::METRO,
            3 => self::QUILOMETRO,
        ];
    }
}
