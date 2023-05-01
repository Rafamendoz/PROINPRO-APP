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
       if()
        
       $imagenes= time().'.'.$request->file->getClientOriginalName(); 
       $url = Storage::url($request->file->getClientOriginalName());
       $request->file->move(public_path('storage'), $request->file->getClientOriginalName());
      

       Files::create([
        'url'=>$url]
       );

       return $url;
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
