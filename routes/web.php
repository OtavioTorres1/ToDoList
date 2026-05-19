<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\TarefasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('usuario.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| Cadastro em etapas
|--------------------------------------------------------------------------
*/

Route::get('/cadastro', function () {
    return view('usuario.cadastro');
})->name('cadastroForm');


Route::post('/cadastro/etapa1', [PerfilController::class, 'salvarEtapa1'])
    ->name('cadastro.etapa1');


Route::view('/cep', 'cep')
    ->name('cep');


Route::post('/cadastro/finalizar', [PerfilController::class, 'finalizarCadastro'])
    ->name('cadastro.finalizar');


/*
|--------------------------------------------------------------------------
| API CEP
|--------------------------------------------------------------------------
*/

Route::get('/buscar-cep/{cep}', [PerfilController::class, 'buscarCep']);


/*
|--------------------------------------------------------------------------
| Perfil
|--------------------------------------------------------------------------
*/

Route::get('/perfil', [PerfilController::class, 'index'])
    ->name('perfil');


Route::get('/editarUsuario', function () {

    $usuario = \App\Models\PerfilUsuario::latest('id')->first();

    return view('usuario.editarUsuario', compact('usuario'));

})->name('editarUsuario');


Route::put('/editarUsuario/{id}', [PerfilController::class, 'update'])
    ->name('updateUsuario');


Route::delete('/deletarUsuario/{id}', [PerfilController::class, 'destroy'])
    ->name('deletarUsuario');


/*
|--------------------------------------------------------------------------
| Tarefas
|--------------------------------------------------------------------------
*/

Route::get('/home', [TarefasController::class, 'index'])
    ->name('home');


Route::post('/NovaTarefa', [TarefasController::class, 'store'])
    ->name('NovaTarefa');


Route::get('/NovaTarefa', function () {
    return view('usuario.NovaTarefa');
})->name('NovaTarefaHome');