<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'nacionalidad',
        'posicion',
        'edad',
        'goles',
        'asistencias'
        ];

        public function equipo(){
            return $this->belongsTo(Equipo::class);
        }
}
