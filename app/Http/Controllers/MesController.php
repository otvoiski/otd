<?php

namespace App\Http\Controllers;

use App\Mes;
use App\Ano;
use App\Debito;

use Illuminate\Http\Request;

class MesController extends Controller
{
    public function index($ano){
        if(Ano::where('ano', '=', $ano)->firstOrFail())
            $dados =
                [
                    'ano' => $ano,
                    'total' => Mes::getTotalMes(),
                    'meses' => Mes::all()
                ];
        else
            return view('err/404');
        return view('pags/ano')->with($dados);
    }

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
}
