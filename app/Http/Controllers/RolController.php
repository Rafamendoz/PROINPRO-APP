<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function setRol(Request $request){
        $rol = Role::create(["name"=>$request->name]);
        return response()->json(['Rol'=>$rol,'Estado'=>'Exitoso','Descripcion'=>'Registros Encontrados'],200);
    }

    public function getRolesRest(){
            $roles = Role::all();
            return response()->json(['Rol'=>$roles,'Estado'=>'Exitoso','Descripcion'=>'Registros Encontrados'],200);
    }

}
