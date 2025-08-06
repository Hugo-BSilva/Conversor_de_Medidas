<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversaoController;

Route::get('/', [ConversaoController::class, 'index']);
Route::post('/converter', [ConversaoController::class, 'converter'])->name('converter.executar');
