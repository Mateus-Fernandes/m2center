<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo_serv', 
        'descricao_serv',
        'user_id',
        'id',
        'imagem_serv',
        'icone_serv',
        'resumo_serv'
    ];
}
