<?php

namespace App\Http\Controllers;
use App\Ano;
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
//      Se cadastrar o ano, começa a cadastra os meses



            $anos = Ano::all();
            return view('pags/home')->with(['anos' => $anos, 'err' => 1]);
        } else {
            return view('pags/home')->with(['anos' => null, 'err' => 2]);
        }
    }

    public function show(Ano $ano)
    {
        //
    }

    public function destroy(Ano $ano)
    {
        //
    }

    public function update(Request $request, Ano $ano)
    {
        //
    }
}
