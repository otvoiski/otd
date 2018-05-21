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


// Cadastrar
Route::get('cadastrar/ano', function () {
    return view('cads/cadAno');
});
Route::get('cadastrar/mes', function () {
    return view('cads/cadMes');
});
Route::get('cadastrar/debito', function () {
    return view('cads/cadDeb');
});


// Pags
Route::get('/{ano}', function () {
    return view('pags/ano');
});
Route::get('/{ano}/{mes}', function ($ano, $mes) {
  if(true){
    if(in_array($mes, ["jar", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set", "out", "nov", "dez"]))
      return view('pags/mes');
    else
      return view('err/404');
  } else return view('err/404');
});
