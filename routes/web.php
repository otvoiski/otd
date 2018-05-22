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
    return view('pags/home');
});
Route::resource('Ano', 'Ano');


// Cadastrar
Route::get('cadastrar/ano', function () {
    return view('cads/cadAno');
});
Route::get('{ano}/cadastrar/debito', function ($ano) {
    if($ano == "2018")
        return view('cads/cadDeb', ['ano' => '2018']);// <- deu erro aki
    else return view('err/404');
})->where(['ano' => '[0-9]+[0-9]+[0-9]+[0-9]+']);

// POST
Route::get('/cadastrar/ano/iniciar', function () {
    return view('cads/cadDeb'); //enviar alerta de positivade
});


// Pags
Route::get('/{ano}', function () {
    return view('pags/ano');
})->where(['ano' => '[0-9]+[0-9]+[0-9]+[0-9]+']);
Route::get('/{ano}/{mes}', function ($ano, $mes) {
  if(true){ //2018
    if(in_array($mes, ["jar", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set", "out", "nov", "dez"]))
      return view('pags/mes');
    else
      return view('err/404');
  } else return view('err/404');
})->where(['ano' => '[0-9]+[0-9]+[0-9]+[0-9]+']);

Route::resource('products', 'ProductController')->middleware('auth');
