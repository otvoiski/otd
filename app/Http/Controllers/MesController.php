<?php

namespace App\Http\Controllers;

use App\Mes;
use App\Ano;
use App\Debito;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function credito($ano,$apelido){
        $mes = Mes::where('apelido','=', $apelido)->firstOrFail();
        $dados =
            [
                'ano' => $ano,
                'mes' => $mes->apelido,
                'mesNome' => $mes->mes,
                'credito' => $mes->credito
            ];
        return view('cads/cadCre')->with($dados);
    }

    public function store(Request $request,$ano,$apelido){

        if($mes = Mes::where('apelido', '=', $apelido)->firstOrFail()){
            if(Ano::where('ano', '=', $ano)->firstOrFail()) {

                $mes->credito = $request->input('credito');

                if ($mes->save()) {
                    $dados =
                        [
                            'ano' => $ano,
                            'mes' => $mes,
                            'debitos' => Debito::all()->where('mes','=',$mes->id)
                        ];
                    return view('pags/mes')->with($dados);

                } else {
                    return view('err/404');
                }
            }

        }

    }

}
