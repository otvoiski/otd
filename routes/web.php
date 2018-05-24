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

/* Ano */
    Route::get('/',                                 'AnoController@index');
    Route::get('cadastrar/ano',                     'AnoController@create');
    Route::post('cadastrar/ano',                    'AnoController@store');

/* Mes */
    Route::get('/{ano}',                            'MesController@index');

/* Debito */
    Route::get('/{ano}/{mes}',                      'DebitoController@show');
    Route::get('/{ano}/{mes}/cadastrar/debito',     'DebitoController@create');
    Route::post('/{ano}/{mes}/cadastrar/debito',    'DebitoController@store');
    Route::get('/{ano}/{mes}/remover/debito/{id}',  'DebitoController@delete');




