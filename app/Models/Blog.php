<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo_blog', 
        'miniatura_blog',
        'user_id',
        'id',
        'imagem_blog',
        'texto_blog',
    ];
}
