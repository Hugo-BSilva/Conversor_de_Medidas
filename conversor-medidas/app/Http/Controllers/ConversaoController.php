<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ConversaoService;
use App\Enums\UnidadeEnum;
use App\Enums\EscalaEnum;

class ConversaoController extends Controller
{
    protected $conversaoService;

    public function __construct(ConversaoService $conversaoService)
    {
        $this->conversaoService = $conversaoService;
    }

    public function index()
    {
        $unidades = UnidadeEnum::getAll();

        return view('conversao.index', compact('unidades'));
    }

    public function converter(Request $request)
    {
        $request->validate(
            [
                'valor' => 'required|numeric|min:0.000001',
            ],
            [
                'valor.required' => 'Você precisa digitar um valor.',
                'valor.numeric' => 'O valor deve ser numérico.',
                'valor.min' => 'O valor deve ser maior que zero.',
            ]);

        $valor = (float) str_replace(',', '.', $request->input('valor'));
        $origem = (int) $request->input('unidadeOrigem');
        $destino = (int) $request->input('unidadeDestino');

        if ($origem === $destino) {
            return back()->with('erro', 'Unidades iguais! Escolha unidades diferentes.');
        }

        if ($valor <= 0) {
            return back()->with('erro', 'Valor deve ser maior que zero.');
        }

        $valorConvertido = $this->conversaoService->converter($origem, $destino, $valor);

        $resultado = number_format($valorConvertido, 0, ',', '.');

        return redirect('/')
            ->with('resultado', "{$valor} " . UnidadeEnum::getAll()[$origem] . " = {$resultado} " . UnidadeEnum::getAll()[$destino]);
    }
}
