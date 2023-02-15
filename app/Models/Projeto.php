<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = 'projetos';

    protected $fillable = [
        'id',
        'nome_projeto',
        'descricao',
        'objetivo',
        'data_criacao',
        'data_entrega',
        'situacao',
        'capa',
        'curso_id',
        'categoria_id',
    ];
}
