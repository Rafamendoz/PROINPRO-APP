@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Archivos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
          <h5 class=" font-weight-bold text-info">Panel de Archivos</h5>
        </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <!-- Topbar Search -->  
        </div>
    </div>

    <div class="container ">
      <div class="row ">

      
      </div>

    </div>

    <div class="card-body">
      <div class="row p-4">
        <div class="col-md-6 p-4">
            <div class="form-group"> 
              <label for="">Proyecto:</label>
              <label for=""><b>{{$proyecto->nombre_proyecto}}</b></label>
            </div>

            <div class="form-group"> 
              <label for="">Total de Archivos Actuales bajo el Proyecto:</label>
              <label for=""><b>5</b></label>
            </div>
            <br>
            <br>
            <form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">

                    <input type="file" name="file" id="file">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="{{$proyecto->id}}">
                    <input type="hidden" name="nombre_proyecto" id="nombre_proyecto" value="{{$proyecto->nombre_proyecto}}">

                  </div>
                  <button type="submit" class="btn btn-primary">Subir Archivo</button>

                

      
            </form>

    
        </div>

        <div class="col-md-6">
          <img src="{{asset('build/img/Pronaders-1.jpg')}}" alt="" srcset="">
        </div>
      </div>
    </div>
 
</div>



@endsection