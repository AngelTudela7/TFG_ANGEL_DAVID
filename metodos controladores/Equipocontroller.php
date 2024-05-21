<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    
    public function mostrarEquipos(){
        $equipos = Equipo::SimplePaginate(5);
        return view('mostrarEquipos', compact('equipos'));
        }

        public function verEquipo($id){
            $equipo = Equipo::find($id);
            $jugadores = $equipo->jugadores;
            $estadio = $equipo->estadio;
            return view('verEquipo', compact('equipo','jugadores','estadio'));
        }


        public function crearEquipo(Request $datos){
            $datos-> validate([
                'nombre_Equipo' => 'required|max:255|min:5',
                'pais_Equipo' => 'required|max:50|min:1',
                'ciudad_Equipo' => 'required|max:50|min:1',
                'numero_plantilla' => 'required|max:50|min:1',
                'abreviacion' => 'required|max:50|min:1',
                'competicion_id' => 'required|max:50|min:1',
                'estadio_id'

            ]);
            
                $equipo = new Equipo;
                $equipo->nombre_Equipo= $datos->nombre_Equipo;
                $equipo->pais_Equipo = $datos->pais_Equipo;
                $equipo->ciudad_Equipo = $datos->ciudad_Equipo;
                $equipo->numero_plantilla = $datos->numero_plantilla;
                $equipo->abreviacion = $datos->abreviacion;
                $equipo->competicion_id = $datos->competicion_id;
                $equipo->estadio_id = $datos->estadio_id;
                $equipo->save();
                
            return back()->with('mensaje', 'Equipo dada de alta');
        }

        public function editarEquipo($id) {
            $equipo = Equipo::find($id);
            return view('editarEquipo', compact('equipo'));
            }
           
            public function actualizarEquipo(Request $datos, $id) {
                $datos-> validate([
                    'nombre_Equipo' => 'required|max:255|min:5',
                    'pais_Equipo' => 'required|max:50|min:1',
                    'ciudad_Equipo' => 'required|max:50|min:1',
                    'numero_plantilla' => 'required|max:50|min:1',
                    'abreviacion' => 'required|max:50|min:1',
                    'competicion_id' => 'required|max:50|min:1',
                    'estadio_id' => 'required|max:50|min:1'
                ]);
               
                $equipo = Equipo::find($datos->id);
                $equipo->nombre_Equipo= $datos->nombre_Equipo;
                $equipo->pais_Equipo = $datos->pais_Equipo;
                $equipo->numero_plantilla = $datos->numero_plantilla;
                $equipo->abreviacion = $datos->abreviacion;
                $equipo->competicion_id = $datos->competicion_id;
                $equipo->estadio_id = $datos->estadio_id;
                $equipo->save();
                return back()->with('mensaje', 'Equipo actualizado');
                }
                 
                public function eliminarEquipo(Request $datos, $id){
                    $equipo = Equipo::findOr($id, function(){
                    echo "Arbitro no encontrado<br>";
                    });
                    if ($equipo != null) {
                    $equipo->delete();
                    return back()->with('mensaje', 'Equipo Eliminado');
                    }
                    else {
                    return back()->with('mensaje', 'No existe el equipo');
                    }
                   
                    }
                   




}
