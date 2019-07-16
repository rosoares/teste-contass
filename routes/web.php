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

Route::get('/', 'TarefasController@index')->name('index');
Route::get('/novatarefa', 'TarefasController@create')->name('novatarefa');
Route::post('/cadastrartarefa', 'TarefasController@store')->name('cadastrartarefa');
Route::get('/editartarefa/{id}', 'TarefasController@edit')->name('editartarefa');
Route::post('/atualizartarefa', 'TarefasController@update')->name('atualizartarefa');
Route::post('/apagartarefa', 'TarefasController@destroy')->name('apagartarefa');