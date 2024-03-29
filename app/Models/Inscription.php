<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $table = 'inscricoes';

    protected $fillable = [
        'quantidade_inscricoes',
        'ultima_atualizacao',
    ];
}
