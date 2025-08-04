<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
Route::get('/', [ConversaoController::class, 'index']);
Route::post('/converter', [ConversaoController::class, 'converter'])->name('converter');
;
