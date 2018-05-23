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
    Route::get('/',             'AnoController@index');                                         // Default pag
    Route::get('cadastrar/ano', 'AnoController@create');                                        // Cadastrar pag
    Route::post('cadastrar/ano','AnoController@store');                                         // Store

/* Mes */
    Route::get('/{ano}', 'MesController@index')->where(['ano' => '[0-9]+[0-9]+[0-9]+[0-9]+']);  // Ano









    Route::get('{ano}/cadastrar/debito', function ($ano) {
        if($ano == "2018")
            return view('cads/cadDeb', ['ano' => '2018']);
        else return view('err/404');
    })->where(['ano' => '[0-9]+[0-9]+[0-9]+[0-9]+']);

    // POST
    Route::get('/cadastrar/ano/iniciar', function () {
        return view('cads/cadDeb'); //enviar alerta de positivade
    });

    Route::get('/{ano}/{mes}', function ($ano, $mes) {
        if(true){ //2018
            if(in_array($mes, ["jar", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set", "out", "nov", "dez"]))
                return view('pags/mes');
            else
                return view('err/404');
        } else return view('err/404');
    })->where(['ano' => '[0-9]+[0-9]+[0-9]+[0-9]+']);

