<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string, boolean>
     */
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'status',
        'admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'senha',
        'remember_token',
    ];

    /**
     * The clients that belong to the user.
     */
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'usuarios_clientes', 'id_usuario', 'id_cliente');
    }
}