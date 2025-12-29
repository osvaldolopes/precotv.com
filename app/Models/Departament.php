<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    protected $primaryKey = 'departament_id';

    protected $fillable = [
        'departament_id',
        'dep_description',
        'img_url',
        'dep_texto',
        'paginate',
    ];
}
