<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ConversaoService;

class ConversaoController extends Controller
{
    protected $conversaoService;

    public function __construct(ConversaoService $conversaoService)
    {
        $this->conversaoService = $conversaoService;
    }

    public function index()
    {
        return view('conversor');
    }

    public function converter(Request $request)
    {
        $dados = $request->validate([
            'valor' => 'required|numeric',
            'origem' => 'required|string',
            'destino' => 'required|string',
        ]);

        try {
            $resultado = $this->conversaoService->converter(
                $dados['origem'],
                $dados['destino'],
                $dados['valor']
            );

            return back()->with('resultado', $resultado);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }
}