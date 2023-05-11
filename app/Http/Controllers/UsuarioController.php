<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estado;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\ModelHasRoles;



class UsuarioController extends Controller
{

    // SERVICIOS 

    public function loadListUpdateUsuario($user){
        $usuario = User::where('user', $user)->join('model_has_roles','model_has_roles.model_id','=', 'users.id')->get();
        $roles = Role::all();
        $estados = Estado::all();
      return view('updateUsuario',compact('usuario','roles', 'estados'));
    }

    public function loadList(){
        $roles = Role::all();
        $estados = Estado::all();
        $result =response()->json(["roles"=>$roles, "estados"=>$estados]);
        return view('insertUsuario',compact('roles', 'estados'));
    }

    public function setUsuario(Request $request){
       $usuario= User::create(['name'=>$request->name,
        'lastname'=>$request->lastname,
        'user'=>$request->user,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'estado'=>$request->estado,
        'intentos'=>$request->intentos

        ])->assignRole($request->rol);

     

        return response()->json(['Usuario'=>$usuario, 'Estado'=>'Exitoso', 'Descripcion'=>"Registro Agregado"],200);

    }

    public function putUsuario(Request $request, $id){
        
        $usuario= User::find($id);
        $usuario->update(['name'=>$request->name,
        'lastname'=>$request->lastname,
        'user'=>$request->user,
        'email'=>$request->email,
        'estado'=>$request->estado,
        'password'=>Hash::make($request->password),
        ]);

        $model = ModelHasRoles::where('model_id',$id)->update(['role_id'=>$request->rol]);
       
        return response()->json(['Usuario'=>$usuario, 'Rol'=>$model ,'Estado'=>'Exitoso', 'Descripcion'=>'Registro Modificado'],200);


    }


    public function getUsuarioRestByUser($user){
        $usuario = User::where('user', $user)->join('estado', 'users.estado','=','estado.id')->select('users.*', 'estado.valor_estado')
        ->get();
        return response()->json(['Usuario'=>$usuario, 'Estado'=>'Exitoso', 'Descripcion'=>"Registro Encontrado"],200);

    }

    public function getUsuarios(){
        $usuarios = DB::table('users')->join('estado', 'users.estado','=','estado.id')
        ->get();
        return view('listarUsuario', compact('usuarios'));

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
