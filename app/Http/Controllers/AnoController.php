<?php

namespace App\Http\Controllers;
use App\Ano;
use App\Mes;
use Illuminate\Http\Request;

class AnoController extends Controller
{
    public function index(){
        $dados =
            [
                'err' => 0,
                'anos' => Ano::all()
            ];

        return view('pags/home')->with($dados);
    }

    public function create()
    {
        return view('cads/cadAno');
    }

    public function store(Request $request){
        $ano = new Ano;
        $ano->ano   = $request->ano;


        if($ano->save()){
//          Se cadastrar o ano, começa a cadastra os meses
            $mes = new Mes;
            $mes::insert('Janeiro','jar',$ano->id);
            $mes::insert('Fevereiro','fev',$ano->id);
            $mes::insert('Março','mar',$ano->id);
            $mes::insert('Abril','abr',$ano->id);
            $mes::insert('Maio','mai',$ano->id);
            $mes::insert('Junho','jun',$ano->id);
            $mes::insert('Julho','jul',$ano->id);
            $mes::insert('Agosto','ago',$ano->id);
            $mes::insert('Setembro','set',$ano->id);
            $mes::insert('Outubro','out',$ano->id);
            $mes::insert('Novembro','nov',$ano->id);
            $mes::insert('Dezembro','dez',$ano->id);

            $anos = Ano::all();
            return view('pags/home')->with(['anos' => $anos, 'err' => 1]);
        } else {
            return view('pags/home')->with(['anos' => null, 'err' => 2]);
        }
    }
}
