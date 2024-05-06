<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'numero_Jornadas',
        'numero_Equipos',
        'pais_Competicion'
        ];

        public function equipos(){
            return $this->hasMany(Equipo::class);
        }
}
