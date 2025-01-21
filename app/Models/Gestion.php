<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    use HasFactory;
    protected $table = 'gestion';

    protected $fillable = [
        'dato',
        'id_colegio'
    ];
    public function colegio(){
        return $this->belongsTo(Colegio::class);
    }

    public function cursos(){
        return $this->hasMany(Curso::class,'id_gestion');
    }

}
