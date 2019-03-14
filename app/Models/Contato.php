<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo_contato', 
        'cidade',
        'user_id',
        'id',
        'endereco',
        'bairro',
        'cep',
        'email',
        'funcionamento_semana',
        'funcionamento_hora',
        'texto_rodape_inicial'
    ];
}
