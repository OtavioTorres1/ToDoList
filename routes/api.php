<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarefasController;
use App\Http\Controllers\PerfilController;


 //GET
 Route::get('/tarefasApi','App\Http\Controllers\TarefasController@tarefasApi');
 Route::get('/Usuario','App\Http\Controllers\PerfilController@indexApi');

 //POST
 Route::post('/addTarefa','App\Http\Controllers\tarefasController@storeApi');
 Route::post('/addUsuario','App\Http\Controllers\PerfilController@storeApi');

 //UPDATE
 Route::put('/alterarTarefa/{id}','App\Http\Controllers\TarefasController@updateApi');
 Route::put('/alterarTUsuario/{id}','App\Http\Controllers\PerfilController@updateApi');

 //DELETE
 Route::delete('/deletarTarefas/{id}','App\Http\Controllers\TarefasController@destroyApi');
 Route::delete('/deletarUsuario/{id}','App\Http\Controllers\PerfilController@destroyApi');



