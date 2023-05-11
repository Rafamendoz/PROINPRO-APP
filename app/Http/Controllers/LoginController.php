<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $credenciales = [
            'user'=> $request->user,
            'password'=> $request->password
        ];

        $remember = ($request->has('remember')? true : false);
        $prevalidate = User::where('user', $request->user)->where('estado',1)->get();
        if(sizeof($prevalidate)==0 || empty($prevalidate) || is_null($prevalidate)){
            return redirect('login');
        }else{
                if(Auth::attempt($credenciales, $remember )){

                    return redirect()->intended('proyectos');
        
        
                }else{
                    return redirect('login');
                }
        

        }
        

    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));

    }
}
