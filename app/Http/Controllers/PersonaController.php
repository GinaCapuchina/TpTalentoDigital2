<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;


class PersonaController extends Controller
{
    public function listar(){
       // return Persona:: all();
       return Persona::where('fecha_egreso', null)->with('nivelDeUrgencia') -> get();
    }

    public function obtenerUno($id){
        return Persona:: where('fecha_egreso', null)->with('nivelDeUrgencia')->find($id);
    }

    public function agregar(Request $request){
        $obj = new Persona();
        //asignar lo que me pasan del postman
        //nombre
        $obj ->nombre = $request->nombre;
        //apellido
        $obj->apellido= $request->apellido;
        //edad
        $obj->edad= $request->edad;
        //descripcion_estado
        $obj->descripcion_estado = $request->descripcion_estado;
        //nivel_de_urgencia_id 
        $obj->nivel_de_urgencia_id= $request->nivel_de_urgencia_id;
        $obj->fecha_ingreso= date('Y-m-d h:i:s');
        
        
        $obj->save();
        return $obj;

    }


    public function actualizar(Request $request, $id){
        $obj = Persona::find($id);
        //asignar lo que me pasan del postaman
        //nombre
        $obj ->nombre = $request->nombre;
        //apellido
        $obj->apellido= $request->apellido;
        //edad
        $obj->edad= $request->edad;
        //descripcion_estado
        $obj->descripcion_estado = $request->descripcion_estado;
        //nivel_de_urgencia_id 
        $obj->nivel_de_urgencia_id= $request->nivel_de_urgencia_id;
        //fecha_egreso
        $obj->fecha_egreso= $request->fecha_egreso;
        
        
        $obj->save();
        return $obj;

    }

    public function borrar($id){
        $obj= Persona::find($id);
        $obj-> delete();
    }
}
