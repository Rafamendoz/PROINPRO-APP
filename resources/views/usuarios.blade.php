@extends('panelp')


@section('tablabase')
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                             <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <h5 class=" font-weight-bold text-primary">Data de Usuarios</h5>

                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <h7 class=" font-weight-bold text-primary">Add</h6>
                            <button class="btn btn-primary btn-md" type="button"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                    
                                    <input type="file" name="file">
                                    @error('file')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <button type="submit" class="btn-primary">Subir Imagen</button>
                                    </div>
                            



                            </form>   
                   
                        </div>

                        <form action="{{route('files.store')}}"  method="POST" class="dropzone" id="my-awesome-dropzone">
                                
                        </form>



                    </div>


        
@endsection