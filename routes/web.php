<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\ComentarioController;
use App\Http\Middleware\Authenticate;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/login', function () {
    return view('usuario.login');
})->name('login');

Route::get('/', function () {
    return view('usuario.cadastro');
})->name('cadastro.form');

Route::get('/NovaTarefa', function () {
    return view('usuario.NovaTarefa');
})->middleware(Authenticate::class);


//login/logout

Route::post('/fazerLogin','App\Http\Controllers\PerfilController@fazerLogin');

Route::get('/logout','App\Http\Controllers\PerfilController@fazerLogOut');


//Usuario:

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil')->middleware(Authenticate::class);

Route::get('/residencia', [PerfilController::class, 'residencia'])->name('residencia')->middleware(Authenticate::class);

//novo usuario
Route::post('/cadastro' , [PerfilController::class, 'store'])->name('cadastro');


//Tarefa:

Route::get('/home', [TarefasController::class, 'index'])->name('home')->middleware(Authenticate::class);
Route::get('/hoje', [TarefasController::class, 'TarefasHoje'])->name('hoje')->middleware(Authenticate::class);
Route::get('/estaSemana', [TarefasController::class, 'TarefasSemana'])->name('semana')->middleware(Authenticate::class);
Route::get('/importantes', [TarefasController::class, 'TarefasImportantes'])->name('importantes')->middleware(Authenticate::class);
Route::get('/concluidas', [TarefasController::class, 'TarefasConcluidas'])->name('concluidas')->middleware(Authenticate::class);
Route::get('/tarefa/{id}/alterar', [TarefasController::class, 'alterar'])->name('alterarTarefa')->middleware(Authenticate::class);
Route::put('/tarefa/{id}', [TarefasController::class, 'editar'])->name('editarTarefa')->middleware(Authenticate::class);
Route::delete('/tarefaDelete/{id}', [TarefasController::class, 'destroy'])->name('deletarTarefa')->middleware(Authenticate::class);

//Comentario
Route::post('/home/{id}', [ComentarioController::class, 'store'])->name('CriarComentario')->middleware(Authenticate::class);


//nova tarefa
Route::post('/NovaTarefa', [TarefasController::class, 'store'])->name('NovaTarefa')->middleware(Authenticate::class);
Route::get('/NovaTarefa', function () {
    return view('usuario.NovaTarefa');
})->name('NovaTarefaHome')->middleware(Authenticate::class);