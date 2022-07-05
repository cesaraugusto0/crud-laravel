<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ClienteController;

/* Direciona p/ action index, que retorna a pagina inicial */
Route::get('/', [ClienteController::class, 'index']);


/*  Direciona p/ action cadastroCliente, que retorna a pagina de cadastro  */
Route::get('/clientes/cadastro', [ClienteController::class, 'cadastroCliente']);


/*  Direciona p/ action store, que recebe os dados da view e grava no banco */
Route::post('/clientes', [ClienteController::class, 'store']);


/*  Direciona p/ action clientes, que retorna a lista de todos os clientes do banco */
Route::get('/clientes', [ClienteController::class, 'clientes']);


/*  Direciona p/ action show, que retorna p/ view os dados de determinado cliente */
Route::get('/clientes/{id}', [ClienteController::class, 'show']);


/*  Direciona p/ action distroy, que exclui clientes no banco */
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);


/* Direciona p/ action edit, que retorna os dados do banco para formulario */
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit']);


/*  Direciona p/ action update, que atualizar os dados conforme os valores fornecidos no form  */
Route::put('/clientes/update/{id}', [ClienteController::class, 'update']);

