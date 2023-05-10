@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb shadow p-3 mb-4 bg-light rounded">
    <li class="breadcrumb-item"><a href="{{route('getProyectos')}}">Ver Proyectos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Archivos</li>
  </ol>
</nav>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Archivos Cargados por Proyecto</h5>

    </div>

  </div>

  <div class="card-body">
    <div class="table-responsive">
    <section class="pb-4">
      <section class="w-100 p-4 pb-4 d-flex flex-column">
        <div>
          <div class="input-group">
            <div class="form-outline d-flex">
             
              <a href="/proyecto/{{$id}}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Agregar Archivos
              </a>
           

          </div>
        </div>


      </section>

    </section>


      <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
        <thead class="text-center">
          <tr>
            <th>Id</th>
            <th>Nombre del Archivo</th>
            <th>URL</th>

            <th>CREACION</th>
            <th>Actualizacion</th>

            <th>Acciones</th>

          </tr>
        </thead>

        <tbody class="text-center">
          @foreach ($archivos as $file)
          <tr>
            <td>{{ $file->id }}</td>
            <td>{{ $file->file_name }}</td>
            <td>/public{{ $file->url }}</td>

            <td>{{$file->created_at }}</td>
            <td>{{$file->updated_at }}</td>
            <td>
              <button class="btn btn-danger btn-sm" type="button" onclick="window.location='../../delete/{{ $file->id_proyecto }}/{{ $file->file_name }}'"><i class="fas fa-trash"></i></button>
              <button class="btn btn-primary btn-sm" type="button" onclick="window.location='../../download/{{ $file->id_proyecto }}/{{ $file->file_name }}'"><i class="fas fa-download"></i></button>




            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
    function descargar(){
        route("/download/{id}/{filename}")
    }
</script>


@endsection