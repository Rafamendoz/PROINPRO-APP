<?php

namespace App\Http\Controllers;
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
        
        if(Auth::attempt($credenciales, $remember )){

            return redirect()->intended('proyectos');


        }else{
            return redirect('login');
        }


    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));

    }
}
