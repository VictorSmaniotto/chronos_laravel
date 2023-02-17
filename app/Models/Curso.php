<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $fillable = [
        'id',
        'nome_curso',
        'descricao',
        'situacao',
    ];

    public function getLabelStatusAttribute()
    {
         $status = [
             1 => 'Ativo',
             0 => 'Inativo'
         ];

         return $status[$this->situacao];
     }
}
