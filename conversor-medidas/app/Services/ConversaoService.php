<?php

namespace App\Services;
use App\Enums\EscalaEnum;

class ConversaoService
{
    public function converter(string $unidadeOrigem, string $unidadeDestino, float $valor): float
    {
        $escalas = EscalaEnum::getAll();

        if (!isset($escalas[$unidadeOrigem], $escalas[$unidadeDestino])) {
            throw new \Exception('Unidades inválidas');
        }

        return $valor * $escalas[$unidadeOrigem] / $escalas[$unidadeDestino];
    }
}