<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'texto_historia_i',
        'texto_diferencial_i',
        'texto_rodape_i',
        'titulo_pag_servicos',
        'descricao_pag_servicos',
        'titulo_pag_blog',
        'descricao_pag_blog',

    ];
}
