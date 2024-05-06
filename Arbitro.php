<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'nacionalidad',
        'asignacion'
        ];

        public function partido(){
            return $this->belongsTo(Partido::class);
        }

    
}
