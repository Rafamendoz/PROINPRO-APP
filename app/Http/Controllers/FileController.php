<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;
use App\Models\Proyecto;

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
        return redirect('admin/files/'.$request->id_proyecto);
       }else{
      
        Files::create([
        'id_proyecto'=>$request->id_proyecto,
        'file_name'=>$nombreArchivo,
         'url'=>$url]
        );
        $request->file->move($rutaDirectorio, $request->file->getClientOriginalName());
        return redirect('admin/files/'.$request->id_proyecto);


 
       }

      
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   $proyecto = Proyecto::select('nombre_proyecto')->where('id', $id)->get();
        $archivos = Files::where('id_proyecto',$id)->join('proyectos', 'proyectos.id', '=', 'files.id_proyecto')->
        select('files.id','files.file_name', 'proyectos.nombre_proyecto', 'files.created_at', 'files.updated_at')->get();
        
        return view('archivos',compact('proyecto','archivos', 'id'));
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
    public function destroy($id, $filename)

    { 
        $a = Files::where('id_proyecto',$id)->where('file_name', $filename)->get();
        $path = public_path().$a[0]['url']."\\". $a[0]['file_name'];
        unlink($path);
       $delete = Files::where('id_proyecto',$id)->where('file_name', $filename)->delete();
        return redirect('admin/files/'.$id);

     
    }


    public function download($id, $filename)
    {
       $a = Files::where('id_proyecto',$id)->where('file_name', $filename)->get();
      $path = public_path().$a[0]['url']."\\". $a[0]['file_name'];
       return response()->download($path);
    
      

    }

}
