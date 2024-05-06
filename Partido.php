<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id',
        'duracion',
        'tipo',
        'id_arbitro',
        'id_estadio',
        'jornada',
        'fecha',
        'temporada',
        'resultado',
        'pais'
        ];

        

        public function arbitro(){
            return $this->hasOne(Arbitro::class);
        }

        public function equipos(){
            return $this->belongsToMany(Equipo::class);
        }
}
