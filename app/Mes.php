<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    protected $fillable = ['mes','apelido'];
    protected $guarded = ['id','ano','created_at', 'update_at'];
    protected $table = 'mes';
}
