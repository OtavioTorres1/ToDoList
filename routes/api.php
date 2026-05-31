<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarefasController;
use App\Http\Controllers\PerfilController;



Route::get('/tarefasApi','App\Http\Controllers\TarefasController@tarefasApi');
// Route::get('/storeApi','App\Http\Controllers\tarefasController@storeApi');
Route::post('/addTarefa','App\Http\Controllers\tarefasController@storeApi');

Route::get('/Usuario','App\Http\Controllers\PerfilController@indexApi');
Route::post('/addUsuario','App\Http\Controllers\PerfilController@storeApi');



