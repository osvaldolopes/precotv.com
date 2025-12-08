<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'prod_cod',        
        'prod_description',
        'valor',        
        'PrecoOferta',        
        'prod_checked',
        'departament_id',
    ];
}
