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
    Route::get('/',             'AnoController@index');                                             // Default pag
    Route::get('cadastrar/ano', 'AnoController@create');                                            // create pag
    Route::post('cadastrar/ano','AnoController@store');                                             // Store db

/* Mes */
    Route::get('/{ano}', 'MesController@index');                                                    // Ano pag
    Route::get('/{ano}/{mes}','MesController@show');                                                // Meses pag

/* Debito */
    Route::get('/{ano}/{mes}','DebitoController@show');                                              // Show pag
    Route::get('{ano}/{mes}/cadastrar/debito', 'DebitoController@create');                           // Create pag
    Route::post('{ano}/{mes}/cadastrar/debito', 'DebitoController@store');                           // Store db
    Route::post('{ano}/{mes}/remover/debito', 'DebitoController@delete');                            // Remover db




