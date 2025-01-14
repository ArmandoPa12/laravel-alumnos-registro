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
    ];
    public function colegio(){
        return $this->belongsTo(Colegio::class);
    }

}
