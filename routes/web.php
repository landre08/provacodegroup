<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

// Rota para listar os clientes
Route::get(
    '/',
    [ClientController::class, 'index']
)->name('index');

// Rota para chamar o formulário de cadastro de cliente
Route::get(
    '/novo',
    [ClientController::class, 'cadastrar']
)->name('cadastrar');

// Rota para enviar os dados para cadastrar o cliente do formulário
Route::post(
    '/salvar',
    [ClientController::class, 'salvar']
)->name('salvar');

// Rota para chamar o formulário de edição do cliente
Route::get(
    '/editar/{id}', 
    [ClientController::class, 'editar']
)->name('editar');

// Rota para atualizar as alterações do cliente
Route::put(
    '/atualizar', 
    [ClientController::class, 'atualizar']
)->name('atualizar');

// Rota para excluir o cliente do sistema
Route::get(
    '/excluir/{id}', 
    [ClientController::class, 'excluir']
)->name('excluir');
