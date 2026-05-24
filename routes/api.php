<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarefasApiController;
use App\Http\Controllers\PerfilApiController;

/*
|--------------------------------------------------------------------------
| TAREFAS
|--------------------------------------------------------------------------
*/

Route::get('/tarefas',
[TarefasApiController::class, 'index']);

Route::post('/tarefas',
[TarefasApiController::class, 'store']);

Route::put('/tarefas/{id}',
[TarefasApiController::class, 'update']);

Route::delete('/tarefas/{id}',
[TarefasApiController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| USUÁRIOS
|--------------------------------------------------------------------------
*/

Route::get('/usuarios',
[PerfilApiController::class, 'index']);

Route::get('/usuarios/{id}',
[PerfilApiController::class, 'show']);

Route::post('/usuarios',
[PerfilApiController::class, 'store']);

Route::put('/usuarios/{id}',
[PerfilApiController::class, 'update']);

Route::delete('/usuarios/{id}',
[PerfilApiController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| CEP
|--------------------------------------------------------------------------
*/

Route::get('/buscar-cep/{cep}',
[PerfilApiController::class, 'buscarCep']);