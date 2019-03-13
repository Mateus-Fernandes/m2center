<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Sopamo\LaravelFilepond\Exceptions\InvalidPathException;

class Quemsomos extends Model
{
    protected $fillable = [
        'titulo_qs', 
        'subtitulo_qs',
        'video',
        'historia',
        'missao',
        'i_missao',
        'valores',
        'i_valores',
        'objetivo',
        'i_objetivo',
        'meta',
        'i_meta'
    ];
}
