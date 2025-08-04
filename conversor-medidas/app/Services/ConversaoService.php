<?php

namespace App\Services;

class ConversaoService
{
    public function converter(string $unidadeOrigem, string $unidadeDestino, float $valor): float
    {
        // Exemplo básico para conversão de metros para quilômetros
        if ($unidadeOrigem === 'm' && $unidadeDestino === 'km') {
            return $valor / 1000;
        }

        // Você poderá expandir aqui com mais regras
        throw new \Exception('Conversão não suportada');
    }
}