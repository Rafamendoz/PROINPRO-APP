<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return response()->json($request->all());

      /*  if(!file_exists(public_path().'/storage/'.$request->name)){
            mkdir(public_path().'/storage/'.$request->file->name, 0777,false);
        }else{
        
       $imagenes=$request->name.'.'.$request->file->extension(); 
       $url = Storage::url($imagenes);
       $request->file->move(public_path('storage'), $imagenes);
      

       File::create([
        'url'=>$url]
       );

       return $url;
        }*/
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
