<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\llantas;

class llantera extends Controller
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
}
