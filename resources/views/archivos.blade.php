@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">ARCHIVOS</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-primary">ARCHIVOS</h5>

    </div>

  </div>

  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
        <thead class="text-center">
          <tr>
            <th>Id</th>
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
            <td>{{ $file->url }}</td>

            <td>{{$file->created_at }}</td>
            <td>{{$file->updated_at }}</td>
            <td>
              <button class="btn btn-danger btn-sm" type="button"><i class="fas fa-trash"></i></button>
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