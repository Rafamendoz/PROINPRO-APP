<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsuarioController extends Controller
{

    // SERVICIOS 
    public function setUsuario(Request $request){
       $usuario= User::create(['name'=>$request->name,
        'lastname'=>$request->lastname,
        'user'=>$request->user,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        ]);

     

        return response()->json(['Usuario'=>$usuario, 'Estado'=>'Exitoso', 'Descripcion'=>"Registro Agregado"],200);

    }

    public function putUsuario(Request $request, $user){
        $usuario= User::where('user', $user)->update(['name'=>$request->name,
        'lastname'=>$request->lastname,
        'user'=>$request->user,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        ]);
        return response()->json(['Usuario'=>$usuario, 'Estado'=>'Exitoso', 'Descripcion'=>"Registro Modificado"],200);


    }


    public function getUsuarioRestByUser($user){
        $usuario = User::where('user', $user)->get();
        return response()->json(['Usuario'=>$usuario, 'Estado'=>'Exitoso', 'Descripcion'=>"Registro Encontrado"],200);

    }

    public function getUsuariosRest(){
        $usuarios = User::all();
        return response()->json(['Usuarios'=>$usuarios, 'Estado'=>'Exitoso', 'Descripcion'=>"Registros Encontrado"],200);

    }

    public function asignarRol(){
        $usuario = User::find(1);
        $usuario->assignRole(1);
        return response()->json(['Usuario'=>$usuario, 'Estado'=>'Exitoso', 'Descripcion'=>"Registro Encontrado"],200);

    }

    




}
