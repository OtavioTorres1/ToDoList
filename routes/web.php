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

Route::get('/hoje', function () {
    return view('tarefas.hoje');
})->name('hoje');

Route::get('/concluidas', function () {
    return view('tarefas.concluidas');
})->name('concluidas');

Route::get('/importantes', function () {
    return view('tarefas.importantes');
})->name('importantes');

Route::get('/estaSemana', function () {
    return view('tarefas.estaSemana');
})->name('semana');




//Usuario:

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');

Route::get('/residencia', [PerfilController::class, 'residencia'])->name('residencia');

//novo usuario
Route::post('/cadastro' , [PerfilController::class, 'store'])->name('cadastro');





//Tarefa:x

Route::get('/home', [TarefasController::class, 'index'])->name('home');
Route::get('/hoje', [TarefasController::class, 'TarefasHoje'])->name('hoje');
Route::get('/estaSemana', [TarefasController::class, 'TarefasSemana'])->name('semana');
Route::get('/importantes', [TarefasController::class, 'TarefasImportantes'])->name('importantes');
Route::get('/concluidas', [TarefasController::class, 'TarefasConcluidas'])->name('concluidas');
Route::get('/tarefa/{id}/alterar', [TarefasController::class, 'alterar'])->name('alterarTarefa');
Route::put('/tarefa/{id}', [TarefasController::class, 'editar'])->name('editarTarefa');
Route::delete('/tarefaDelete/{id}', [TarefasController::class, 'destroy'])->name('deletarTarefa');


//nova tarefa
Route::post('/NovaTarefa', [TarefasController::class, 'store'])->name('NovaTarefa');



