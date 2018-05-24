<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable = ['ano'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'anos';
}
