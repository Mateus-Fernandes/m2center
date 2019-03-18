<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome_lead', 
        'email_lead',
        'telefone_lead',
        'id',
        'mensagem_lead'
    ];
}
