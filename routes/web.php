<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('usuario.login');
})->name('login');

use App\Http\Controllers\PerfilController;

Route::post('/cadastro', [PerfilController::class, 'store'])->name('cadastro');

Route::get('/cadastro', function () {
    return view('usuario.cadastro');
})->name('cadastroForm');

use App\Http\Controllers\TarefasController;

Route::get('/home', [TarefasController::class, 'index'])->name('home');

Route::post('/NovaTarefa', [TarefasController::class, 'store'])->name('NovaTarefa');

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');

Route::get('/editarUsuario', function () {

    $usuario = \App\Models\PerfilUsuario::latest('id')->first();

    return view('usuario.editarUsuario', compact('usuario'));

})->name('editarUsuario');

Route::get('/NovaTarefa', function () {
    return view('usuario.NovaTarefa');
})->name('NovaTarefaHome');



Route::get('/buscar-cep/{cep}', [PerfilController::class, 'buscarCep']);

Route::view('/cep', 'cep')->name('cep');;

Route::put('/editarUsuario/{id}', [PerfilController::class, 'update'])
    ->name('updateUsuario');


    Route::delete('/deletarUsuario/{id}', [PerfilController::class, 'destroy'])
    ->name('deletarUsuario');



