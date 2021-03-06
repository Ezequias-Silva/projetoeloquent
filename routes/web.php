<?php

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

Route::get('/', function () {
    return view('welcome');
});

//cria rota para editoras
Route::get('/editoras', 'EditoraController@index');

//Rota para url da editora/1
Route::get('/editoras/{editora}','EditoraController@show');
