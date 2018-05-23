<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    protected $fillable = ['mes','apelido','ano'];
    protected $guarded = ['id','total','created_at', 'update_at'];
    protected $table = 'mes';

    /**
     * Mostra a quantidade de meses e imprime seu total.
     * @return Retorna o valor para o grafico, este sendo o total de valores do mes
     */
    public static function getTotalMes(){
        $meses = DB::table('mes')->select('total')->get();
        $size = DB::table('mes')->count();
        $total = [0,0,0,0,0,0,0,0,0,0,0,0];

        for ($i = 0; $i < $size; $i++){
            $total[$i] = $meses[$i]->total;
        }

        return $total;
    }

    /**
     * @param $nome Nome do Mes
     * @param $apl  Apelido do Mes ex: jar,mar
     * @param $ano  Id referente ao Ano
     * @return bool Retorna true ou false
     */
    public static function insert($nome, $apl, $ano){
        $mes = new Mes;
        $mes->mes = $nome;
        $mes->apelido = $apl;
        $mes->ano = $ano;
        return $mes->save();
    }
}
