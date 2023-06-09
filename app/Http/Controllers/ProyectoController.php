<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Files;

use App\Models\Estado;

class ProyectoController extends Controller
{

    // FUNCIONES PARA RETORNAR VISTAS

    public function getProyectos(Request $request){
        $proyectos = Proyecto::all();
        
        return view('proyectos', compact('proyectos'));
    }

    public function loadList(){
        $estados = Estado::all();
        return view('insertProyecto',compact('estados'));
    }

    public function getProyectoById($id){
        $proyecto = Proyecto::find($id);
        $count = Files::where('id_proyecto',$id)->count();
        return view('uploadfiles', compact('proyecto', 'count', 'id'));
    }


    //SERVICIOS REST
    public function setProyecto(Request $request){
        if(is_null($request->nombre_proyecto) || empty($request->nombre_proyecto)){
            return response()->json(["Estado"=>"Fallido", "Descripcion"=>'Ha Ocurrido un Error', "Codigo Error"=>500],200);

        }else{
            $proyecto = Proyecto::create($request->all());
            return response()->json(["Proyecto"=>$proyecto, "Estado"=>"Exitoso", "Descripcion"=>'Registro Agregado'],202);
    
        }
       

    }

    public function getProyectosRest(){
        $proyectos = Proyecto::all();
        return response()->json(["Proyectos"=>$proyectos, "Estado"=>"Exitoso", "Descripcion"=>"Registro Encontrado"],200);
    }

    public function getProyectoRestById($id){
        $proyectos = Proyecto::find($id);
        return response()->json(["Proyectos"=>$proyectos, "Estado"=>"Exitoso", "Descripcion"=>"Registro Encontrado"],200);
    }

   

    public function putProyecto(Request $request, $id){
        $proyecto = Proyecto::find($id);
        $proyecto->update($request->all());
        return response()->json(["Proyecto"=>$proyecto, "Estado"=>"Exitoso", "Descripcion"=>"Registro Modificado"]);

    }


    public function deleteProyectos(){
        $proyecto = Proyecto::delete();
        return response()->json(["Estado"=>"Exitoso", "Descripcion"=>"Registros Eliminados"]);

    }

    public function contarArchivos(){

    }
}
