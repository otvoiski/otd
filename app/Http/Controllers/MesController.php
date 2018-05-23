<?php

namespace App\Http\Controllers;

use App\Mes;
use Illuminate\Http\Request;

class MesController extends Controller
{
    public function index($ano){
        $dados =
            [
                'ano' => $ano,
                'meses' => Mes::all()
            ];
        return view('pags/ano')->with($dados);
    }
}
