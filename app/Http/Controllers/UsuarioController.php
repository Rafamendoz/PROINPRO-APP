<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function getUsuariosRest(Request $request){
        $usuarios = User::all();
        return response()->json(["Usuarios"=>$usuarios, "Estado"=>"Existoso"]);
    }

    public function getUsuarios(Request $request){
        $usuarios = User::all();
        return view('insertUsuario', compact('usuarios'));
    }
}
