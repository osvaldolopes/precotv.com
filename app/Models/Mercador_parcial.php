<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercador_parcial extends Model
{
    use HasFactory;

    //protected $connection = 'db_precotv';
    //protected $table = 'mercador_parcials';

    // Define a chave primária personalizada
    protected $primaryKey = 'id_parcials';

    protected $fillable = [
        'id_parcials',
        'codigoint',
        'depto',
        'descricao_completa',
        'valor',       
        'PrecoOferta',
        'prod_checked',
    ];
}
