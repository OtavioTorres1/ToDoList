<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarefasController;
use App\Http\Controllers\PerfilController;


 //GET
 Route::get('/ExibirTarefas','App\Http\Controllers\TarefasController@tarefasApi');
 Route::get('/Usuario','App\Http\Controllers\PerfilController@indexApi');
 Route::get('/ExibirComentario','App\Http\Controllers\TarefasController@ComentarioTarefa');

 //POST
 Route::post('/addTarefa','App\Http\Controllers\tarefasController@storeApi');
 Route::post('/addUsuario','App\Http\Controllers\PerfilController@storeApi');
 Route::post('/addComentario','App\Http\Controllers\TarefasController@storeComentarioApi');

 //UPDATE
 Route::put('/alterarTarefa/{id}','App\Http\Controllers\TarefasController@updateApi');
 Route::put('/alterarTUsuario/{id}','App\Http\Controllers\PerfilController@updateApi');
 Route::put('/alterarComentario/{id}','App\Http\Controllers\TarefasController@updateComentarioApi');

 //DELETE
 Route::delete('/deletarTarefas/{id}','App\Http\Controllers\TarefasController@destroyApi');
 Route::delete('/deletarUsuario/{id}','App\Http\Controllers\PerfilController@destroyApi');
 Route::delete('/deletarComentario/{id}','App\Http\Controllers\TarefasController@destroyComentarioApi');




