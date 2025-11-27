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
        'prod_cod',
        'prod_description',
        'valor',
        'PrecoOferta',       
        'departament_id',
        'prod_checked',
    ];
}
