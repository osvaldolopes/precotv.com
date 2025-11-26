<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercador_parcial extends Model
{
    use HasFactory;

    //protected $connection = 'db_precotv';
    //protected $table = 'mercador_parcials';

    protected $fillable = [
        'codigoint',
        'depto',
        'descricao_completa',
        'valor',
        'PrecoOferta',
        'dthr_alt',
    ];
}
