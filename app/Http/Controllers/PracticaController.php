<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\llantas;

class PracticaController extends Controller
{
    public function guardarllanta(Request $request){
        
        $practica = new llantas;
        $practica -> Nombre = $request->Nombre;
        $practica -> Ancho_de_llanta = $request->Ancho_de_llanta;
        $practica -> Diametro_del_rin = $request->Diametro_del_rin;
        $practica -> Presion_max = $request->Presion_max;
        $practica -> Fabricante = $request->Fabricante;
        $practica -> Stock = $request->Stock;
        $practica -> save();
        return view('nuevallanta');
   }

   public function eliminar($id){
        $llant= llantas::find($id);
        $llant->delete();
        return back()->with('bien');
   }

   public function modificar($id){
    $datos =  llantas::all();
    
    return view('editar')
        ->with('datos',$datos[0]);
    }
    public function guardarcambios( Request $request, $id){
        
        $practica = llantas::findOrFail($id);
        $practica -> Nombre = $request->Nombre;
        $practica -> Fabricante = $request->Fabricante;
        $practica -> save();
        return  back()->with('bien');
   }
}
