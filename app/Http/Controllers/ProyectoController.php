<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{

    // FUNCIONES PARA RETORNAR VISTAS

    public function getProyectos(Request $request){
        $proyectos = Proyecto::all();
        
        return view('proyectos', compact('proyectos'));
    }

    public function getProyectoById($id){
        $proyecto = Proyecto::find($id);
        return view('uploadfiles', compact('proyecto'));
    }


    //SERVICIOS REST
    public function setProyecto(Request $request){
        $proyecto = Proyecto::create($request->all());
        return response()->json(["Proyecto"=>$proyecto, "Estado"=>"Existo", "Descripcion"=>'Registro Agregado'],202);


    }

    public function getProyectosRest(){
        $proyectos = Proyecto::all();
        return response()->json(["Proyectos"=>$proyectos, "Estado"=>"Existoso", "Descripcion"=>"Registro Encontrado"],200);
    }

    public function getProyectoRestById($id){
        $proyectos = Proyecto::find($id);
        return response()->json(["Proyectos"=>$proyectos, "Estado"=>"Existoso", "Descripcion"=>"Registro Encontrado"],200);
    }

   

    public function putProyecto(Request $request, $id){
        $proyecto = Proyecto::find($id);
        $proyecto->update($request->all());
        return response()->json(["Proyecto"=>$proyecto, "Estado"=>"Existoso", "Descripcion"=>"Registro Modificado"]);

    }
}
