<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arbitro;

class ArbitroController extends Controller
{
    public function mostrarArbitros(){
        $arbts = Arbitro::all();
        return view('mostrarArbitros', compact('arbts'));
        }

        public function verArbitro($id){
            $arbt = Arbitro::find($id);
            $parts = $arbt->partidos;
            return view('verArbitro', compact('arbt','parts'));
        }
        public function crearArbitro(Request $datos){
            $datos-> validate([
                'nombre_Arbitro' => 'required|max:255|min:5',
                'apellidos_Arbitro' => 'required|max:50|min:3',
                'nacionalidad' => 'required|max:50|min:3',
                'asignacion' => 'required|max:50|min:3'
            ]);
            
                $arbitro = new Arbitro;
                $arbitro->nombre_Arbitro= $datos->nombre_Arbitro;
                $arbitro->apellidos_Arbitro = $datos->apellidos_Arbitro;
                $arbitro->nacionalidad = $datos->nacionalidad;
                $arbitro->asignacion = $datos->asignacion;
                $arbitro->save();
                
            return back()->with('mensaje', 'Arbitro dada de alta');
        }

        public function editarArbitro($id) {
            $arbitro = Arbitro::find($id);
            return view('editarArbitro', compact('arbitro'));
            }
           
            public function actualizarArbitro(Request $datos, $id) {
                $datos-> validate([
                'nombre_Arbitro' => 'required|max:255|min:1',
                'apellidos_Arbitro' => 'required|max:255|min:1',
                'nacionalidad' => 'required|max:255|min:1',
                'asignacion' => 'required|max:255|min:1'
                ]);
               
                $arbitro = Arbitro::find($datos->id);
                $arbitro->nombre_Arbitro = $datos->nombre_Arbitro;
                $arbitro->apellidos_Arbitro = $datos->apellidos_Arbitro;
                $arbitro->nacionalidad = $datos->nacionalidad;
                $arbitro->asignacion = $datos->asignacion;
                $arbitro-> save();
                return back()->with('mensaje', 'Arbitro actualizado');
                }
                 
                public function eliminarArbitro(Request $datos, $id){
                    $arbitro = Arbitro::findOr($id, function(){
                    echo "Arbitro no encontrado<br>";
                    });
                    if ($arbitro != null) {
                    $arbitro->delete();
                    return back()->with('mensaje', 'Arbitro Eliminado');
                    }
                    else {
                    return back()->with('mensaje', 'No existe el arbitrp');
                    }
                   
                    }
                   


}

