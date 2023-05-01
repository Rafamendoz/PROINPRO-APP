<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

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
        $nombreArchivo = $request->file->getClientOriginalName();
        $rutaDirectorio = public_path('storage').'\\'.$nombreArchivo;
      if(!file_exists($rutaDirectorio)){
            mkdir($rutaDirectorio,0777,false);
       }

      
       
        

       $url = Storage::url($nombreArchivo);
       if(file_exists($rutaDirectorio.'\\'.$nombreArchivo)){
        $request->file->move($rutaDirectorio, $request->file->getClientOriginalName());
        return response()->json("ACTUALIZADO");
       }else{
        $request->file->move($rutaDirectorio, $request->file->getClientOriginalName());
      

        Files::create([
         'url'=>$url]
        );
 
       }
       return response()->json("AGREGADO");
      
       
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
