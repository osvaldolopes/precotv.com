<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'prd_id',
        'department_id',
        'prod_description',
        'prod_price',
        'prod_promo',
        'prod_checked',
    ];
}
