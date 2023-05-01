<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function setProyectoRest(Request $request){
        $proyecto = Proyecto::create($request->all());
        return response()->json(["Proyecto"=>$proyecto, "Estado"=>"Existo", "Descripcion"=>'Registro Agregado'],202);


    }

    public function getProyectosRest(Request $request){
        $proyectos = Proyecto::all();
        return response()->json(["Proyecto"=>$proyectos, "Estado"=>"Existoso"]);
    }

    public function getProyectos(Request $request){
        $proyectos = Proyecto::all();
        return view('proyectos', compact('proyectos'));
    }

    public function getProyectoRestById($id){
        $proyecto = Proyecto::find($id);
        
        return view('uploadfiles', compact('proyecto'));
    }

    public function putProyecto(Request $request, $id){
        $proyecto = Proyecto::find($id);
        $proyecto->update($request->all());
        return response()->json(["Proyecto"=>$proyecto, "Estado"=>"Existoso", "Descripcion"=>"Registro Modificado"]);

    }
}
