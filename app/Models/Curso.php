<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'curso';
    protected $fillable = [
        'nombre',
        'paralelo',
        'campo',
        'id_gestion'
    ];

    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }

    public function personas()
    {
        return $this->hasMany(Persona::class,'id_curso');
    }

}
