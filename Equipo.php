<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'pais',
        'ciudad',
        'numero_Plantilla',
        'abreviacion',
        'id_Competicion',
        'id_Estadio'
        ];

        public function competicion(){
            return $this->belongsTo(Competicion::class);
        }

        public function estadio(){
            return $this->hasOne(Estadio::class);
        }

        public function jugadores(){
            return $this->hasMany(Jugador::class);
        }

        public function partidos(){
            return $this->belongsToMany(Partido::class);
        }
    
}
