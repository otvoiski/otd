<?php

namespace App\Http\Controllers;

use App\Mes;
use App\Debito;

use Illuminate\Http\Request;

class DebitoController extends Controller
{
    public function show($ano,$mes){
        $dados =
            [
                'ano' => $ano,
                'mes' => Mes::all()->where('apelido','=',$mes)->first(),
                'err' => 0,
                'debitos' => Debito::all()->where('mes','=',$mes)->where('ano','=',$ano)
            ];
        return view('pags/mes')->with($dados);
    }

    public function create($ano,$mes)
    {
        return view('cads/cadDeb', ['ano' => '2018']);
    }

    public function store($ano,$mes)
    {
        return view('cads/cadDeb', ['ano' => '2018']);
    }
}
