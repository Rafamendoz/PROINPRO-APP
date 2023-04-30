<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function store(Request $request){
        $image = $request->file('file');
        $imageName = time().rand(1,100).'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        return response()->json(["success"=> $imageName]);
    }
}
