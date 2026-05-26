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

Route::get('/NovaTarefa', function () {
    return view('usuario.NovaTarefa');
})->name('NovaTarefaHome');





//Usuario:

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');

Route::get('/residencia', [PerfilController::class, 'residencia'])->name('residencia');

//novo usuario
Route::post('/cadastro' , [PerfilController::class, 'store'])->name('cadastro');





//Tarefa:

Route::get('/home', [TarefasController::class, 'index'])->name('home');

//nova tarefa
Route::post('/NovaTarefa', [TarefasController::class, 'store'])->name('NovaTarefa');



