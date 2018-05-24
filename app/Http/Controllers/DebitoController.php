<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Mes;
use App\Debito;

use Illuminate\Http\Request;

class DebitoController extends Controller
{
    public function show($ano,$mes){
        $meses = Mes::all()->where('apelido','=',$mes)->first();
        $dados =
            [
                'ano' => $ano,
                'mes' => $meses,
                'debitos' => Debito::all()->where('mes','=',$meses->id)
            ];
        return view('pags/mes')->with($dados);
    }

    public function create($ano,$mes)
    {
        $dados =
            [
              'ano' => $ano,
              'mes' => $mes
            ];
        return view('cads/cadDeb')->with($dados);
    }

    public function store(Request $request, $ano, $mes)
    {
        if($mes = Mes::where('apelido', '=', $mes)->firstOrFail())
            if(Ano::where('ano', '=', $ano)->firstOrFail())
            {

                $debito = new Debito;
                $debito->descricao = $request->input('descricao');
                $debito->valor = $request->input('valor');
                $debito->mes = $mes->id;

                if($debito->save())
                    $err = 0;
                else $err = 1;


                $mes->calculaDebito($mes->id);

                $dados =
                    [
                        'ano' => $ano,
                        'mes' => Mes::all()->where('apelido','=',$mes->apelido)->first(),
                        'err' => $err,
                        'debitos' => Debito::all()->where('mes', '=', $mes->id)
                    ];


                return view('pags/mes')->with($dados);
            }

        return view('err/404');
    }

    public function delete($ano, $mes, $id)
    {
        if ($mes = Mes::where('apelido', '=', $mes)->firstOrFail()) {
            if ($ano = Ano::where('ano', '=', $ano)->firstOrFail()) {

                if(Debito::destroy($id))
                    $err = 2;
                 else
                    $err = 3;

                 $mes->calculaDebito($mes->id);

                $dados =
                    [
                        'ano' => $ano->ano,
                        'mes' => $mes,
                        'err' => $err,
                        'debitos' => Debito::all()->where('mes', '=', $mes->id)

                    ];

                return redirect($ano->ano.'/'.$mes->apelido)->with($dados);

            }
        }
    }
}
