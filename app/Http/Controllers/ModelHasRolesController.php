<?php

namespace App\Http\Controllers;
use App\Models\ModelHasRoles;
use Illuminate\Http\Request;

class ModelHasRolesController extends Controller
{
    public function getRoleByIdUser($id){
        $rol_actual = ModelHasRoles::where('model_id', $id)->join('users', 'users.id' , '=','model_has_roles.model_id')->join('roles', 'roles.id' , '=','model_has_roles.role_id')->select('roles.name')->get();
     
        return view('profile', compact('rol_actual'));
    }
}
