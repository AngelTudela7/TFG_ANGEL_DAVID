<?php

namespace App\Http\Controllers;

use App\Models\Estadio;
use Illuminate\Http\Request;

class EstadioController extends Controller
{
    public function mostrarEstadios(){
        $estadios = Estadio::SimplePaginate(5);
        return view('mostrarEstadios', compact('estadios'));
        }
    
        public function verEstadio($id){
            $estadio = Estadio::find($id);
            $equipo = $estadio->equipos()->get(); // Accede a la relación como un método
            return view('verEstadio', compact('estadio', 'equipo'));
        }
    
        public function editarEstadio($id) {
            $estadio = Estadio::find($id);
            return view('editarEstadio', compact('estadio'));
            }
           
            public function actualizarEstadio(Request $datos, $id) {
                $datos-> validate([
                'nombre_Estadio' => 'required|max:255|min:1',
                'pais' => 'required|max:255|min:1',
                'ciudad' => 'required|max:255|min:1',
                'aforo' => 'required|max:255|min:1'
                ]);
               
                $arbitro = Estadio::find($datos->id);
                $arbitro->nombre_Estadio = $datos->nombre_Estadio;
                $arbitro->pais = $datos->pais;
                $arbitro->ciudad = $datos->ciudad;
                $arbitro->aforo = $datos->aforo;
                $arbitro-> save();
                return back()->with('mensaje', 'Estadio actualizado');
                }

                public function eliminarEstadio(Request $datos, $id){
                    $estadio = Estadio::findOr($id, function(){
                    echo "Estadio no encontrado<br>";
                    });
                    if ($estadio != null) {
                    $estadio->delete();
                    return back()->with('mensaje', 'Estadio Eliminado');
                    }
                    else {
                    return back()->with('mensaje', 'No existe el Estadio');
                    }
                   
                    }


                    public function crearEstadio(Request $datos){
                        $datos-> validate([
                            'nombre_Estadio' => 'required|max:255|min:5',
                            'pais' => 'required|max:50|min:3',
                            'ciudad' => 'required|max:50|min:3',
                            'aforo' => 'required|max:50|min:3'
                        ]);
                        
                            $estadio = new Estadio;
                            $estadio->nombre_estadio= $datos->nombre_Estadio;
                            $estadio->pais = $datos->pais;
                            $estadio->ciudad = $datos->ciudad;
                            $estadio->aforo = $datos->aforo;
                            $estadio->save();
                            
                        return back()->with('mensaje', 'Estadio dada de alta');
                    }


    
    }
