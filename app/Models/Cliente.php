<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nome',
        'cnpj',
        'uf',
        'id_questor',
        'status'
    ];
}
