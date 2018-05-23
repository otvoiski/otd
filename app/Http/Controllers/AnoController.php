<?php

namespace App\Http\Controllers;
use App\Ano;
use Illuminate\Http\Request;

class AnoController extends Controller
{
    public function index(){
        $dados =
            [
                'err' => false,
                'anos' => Ano::all()
            ];

        return view('pags/home')->with($dados);
    }

    public function store(AnoRequest $request){
//        $ano = new Ano;
//        $ano->ano   = $request->ano;
//
//
//        if($ano->save()){
//            $anos = Ano::all();
//            return view('pags/home',['anos' => $anos, 'err' => true, 'class' => 'alert-success']);
//        } else {
//            return view('pags/home',['anos' => null, 'err' => true, 'class' => 'alert-danger']);
//        }
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
