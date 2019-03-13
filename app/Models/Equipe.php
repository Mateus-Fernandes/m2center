<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome_membro', 
        'cargo_membro',
        'user_id',
        'id',
        'descricao_membro',
        'foto_membro',
    ];
}
