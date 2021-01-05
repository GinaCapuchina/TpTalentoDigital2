<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NivelDeUrgencia;

class NivelDeUrgenciaController extends Controller
{
    /*
    listar 
    obtenerUno
    agregar
    actualizar
    borrar
    */

    public function listar(){
        return NivelDeUrgencia::all();
    }

    public function obtenerUno($id){
        return NivelDeUrgencia::find($id);

    }

    public function agregar(Request $request){
            $obj = new NivelDeUrgencia();
            //Nombre izq nombre base de datos
            //colo
            //tipo_de_urgencia
            //tiempo_de_espera_máximo
            
            $obj->color = $request->color;
            $obj->tipo_de_urgencia = $request->tipo_de_urgencia;
            $obj->tiempo_de_espera_maximo = $request ->tipo_de_espera_maximo;
            $obj ->save();
            return $obj; 
    }

    public function actualizar(Request $request, $id){
        $obj = NivelDeUrgencia::find($id);
        $obj->color = $request->color;
        $obj->tipo_de_urgencia = $request->tipo_de_urgencia;
        $obj->tiempo_de_espera_maximo = $request ->tipo_de_espera_maximo;
        $obj ->save();
        return $obj; 

    }

    public function borrar($id){
        $obj = NivelDeUrgencia:: find($id);
        $obj->delete();
    }
}
