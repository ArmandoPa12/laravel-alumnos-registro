<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    protected $fillable = [
        'nombre',
        'alumno',
        'id_curso'
    ];

    public function medidas()
    {
        return $this->hasMany(Medidas::class,'id_alumno');
    }
    
}
