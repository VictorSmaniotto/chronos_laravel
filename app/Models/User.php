<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'nome',
        'email',
        'password',
        'tipo_usuario',
        'situacao',
        'foto',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getLabelStatusAttribute()
    {
         $status = [
             1 => 'Ativo',
             0 => 'Inativo'
         ];

         return $status[$this->situacao];
     }

     public function getLabelTipoAttribute()
     {
          $status = [
              1 => 'Administrador',
              2 => 'Gestor',
              3 => 'Professor',
              4 => 'Aluno'
          ];

          return $status[$this->tipo_usuario];
      }
}
