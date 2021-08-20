<?php

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

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('', [InicioController::class, 'index'])->name('inicio');
Route::post('gravar', [InicioController::class, 'gravar'])->name('inicio.gravar');
Route::get('detalhes/{c}', [InicioController::class, 'detalhes'])->name('detalhes');
