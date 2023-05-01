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
        
        $nombreproyecto = $request->nombre_proyecto;
        $nombreArchivo = $request->file->getClientOriginalName();
        $rutaDirectorio = public_path('storage').'\\'.$nombreproyecto;
        if(!file_exists($rutaDirectorio)){
                mkdir($rutaDirectorio,0777,false);
        }


       $url = Storage::url($nombreproyecto);
       if(file_exists($rutaDirectorio.'\\'.$nombreArchivo)){
        $request->file->move($rutaDirectorio, $request->file->getClientOriginalName());
        return response()->json("ACTUALIZADO");
       }else{
      
        Files::create([
        'id_proyecto'=>$request->id_proyecto,
        'file_name'=>$nombreArchivo,
         'url'=>$url]
        );
        $request->file->move($rutaDirectorio, $request->file->getClientOriginalName());
        return response()->json("AGREGADO");


 
       }

      
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $archivos = Files::all();
        
        return view('archivos',compact('archivos'));
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
