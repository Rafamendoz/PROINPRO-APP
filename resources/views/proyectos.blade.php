@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Proyectos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Listado de Proyectos</h5>
      

    </div>



  </div>
  <div class="container ">
  

  </div>

    <div class="card-body">
        <div class="mx-2 row row-cols-4">


                @foreach ($proyectos as $file)
                        
                
                                <div class="card-body">
                                    <h5 class="card-title">{{$file->nombre_proyecto}}</h5>
                                    <p class="card-text">{{$file->descripcion}}</p>
                                    <a href="proyecto/{{$file->id}}" class="btn btn-primary">Ver Archivos</a>
                                </div>
                     
                            
                @endforeach
        </div>

    </div>




</div>



@endsection