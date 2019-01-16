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

    Route::get('/ingredientes','ingredienteController@index');
    Route::get('/ingredientes/add', 'ingredienteController@create'); 
    Route::post('/ingredientes/store','ingredienteController@store'); 
    Route::get('/ingredientes/edit/{id}', 'ingredienteController@edit'); 
    Route::post('/ingredientes/update', 'ingredienteController@update'); 
    Route::get('/ingredientes/del/{id}', 'ingredienteController@destroy'); 

    Route::get('/receitas','receitaController@index');
    Route::get('/receitas/add', 'receitaController@create'); 
    Route::post('/receitas/store','receitaController@store'); 
    Route::get('/receitas/show/{id}','receitaController@show'); 
    Route::get('/receitas/edit/{id}', 'receitaController@edit'); 
    Route::post('/receitas/update', 'receitaController@update'); 
    Route::get('/receitas/del/{id}', 'receitaController@destroy'); 

