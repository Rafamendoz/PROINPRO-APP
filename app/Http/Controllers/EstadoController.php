<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
    public function getEstados(){
        $estados = Estado::all();
        return view('estado' , compact('estados'));
    }


    public function getEstadosRest(){
            $estados = Estado::all();
            return response()->json(['Estados'=>$estados, 'Estado'=>"Exitoso", 'Descripcion'=>"Registros Encontrados"],200);
    }

    public function getEstadoRestById($id){
        $estados = Estado::find($id);
        return response()->json(['Estados'=>$estados, 'Estado'=>"Exitoso", 'Descripcion'=>"Registro Encontrado"],200);
}

    public function setEstado(Request $request){
        $estado = Estado::create($request->all());
        return response()->json(['Estado'=>$estado, 'Estado'=>"Exitoso", 'Descripcion'=>"Registros Agregado"],200);

    }

    public function putEstado(Request $request, $id){
        $estado = Estado::find($id);
        $estado->update($request->all());
        return response()->json(['Estados'=>$estado, 'Estado'=>"Exitoso", 'Descripcion'=>"Registros Modificado"],200);

    }

    public function deleteEstado($id){
        $estado = Estado::find($id);
        $estado->delete();
        return response()->json(['Estados'=>$estado, 'Estado'=>"Exitoso", 'Descripcion'=>"Registros Eliminado"],200);

    }


}
