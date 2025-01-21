<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medidas extends Model
{
    use HasFactory;
    protected $table = 'prendas';

    protected $fillable = [
        'id_alumno',
        'prenda',
        'medida',
        'valor'
    ];

    
}
