<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diferencial extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'icone_dif', 
        'resumo_dif',
        'user_id',
        'id'
    ];
}
