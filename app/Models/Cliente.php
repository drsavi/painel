<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cnpj',
        'idQuestor',
        'status'
    ];

    /**
     * The users that belong to the client.
     */
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuarios_clientes', 'id_cliente', 'id_usuario');
    }
}
