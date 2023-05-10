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

      <a href="/admin/files/{{$file->id}}">
        <div class="card-body btn btn-outline-primary m-2">
          <h5 class="card-title"><b>
              <i class="fa-sharp fa-solid m-2 fa-circle-info fa-shake"></i>{{$file->nombre_proyecto}}</b></h5>
          <p class="card-text">{{$file->descripcion}}</p>
        </div>
      </a>


      @endforeach
    </div>

  </div>




</div>

<script src="https://kit.fontawesome.com/0a7f799594.js" crossorigin="anonymous"></script>


@endsection