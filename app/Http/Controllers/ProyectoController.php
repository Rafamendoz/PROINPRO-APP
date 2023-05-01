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
}
