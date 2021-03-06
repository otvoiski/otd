<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debito extends Model
{
    protected $fillable = ['descricao','valor','mes'];
    protected $guarded = ['id','created_at', 'update_at'];
    protected $table = 'debitos';
}
