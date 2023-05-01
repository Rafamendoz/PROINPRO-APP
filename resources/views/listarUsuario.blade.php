@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Usuarios</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Usuarios</h5>

    </div>



  </div>
  <div class="container ">
    <div class="row ">
      <div class="table-responsive">
        <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>Usuario</th>
              <th>Email</th>
              <th>Intentos</th>
              <th>Verificado</th>
              <th>Password</th>
              <th>Token</th>
              <th>Creado</th>
              <th>Actualizado</th>
              <th>Acciones</th>

            </tr>
          </thead>

          <tbody class="text-center">
            @foreach ($usuarios as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{$user->email }}</td>
              <td>{{$user->intentos}}</td>
              <td>{{$user->email_verified_at }}</td>
              <td>{{$user->password }}</td>
              <td>{{$user->remember_token }}</td>
              <td>{{$user->created_at }}</td>
              <td>{{$user->updated_at }}</td>
              <td>
                <button class="btn btn-danger btn-sm" type="button"><i class="fas fa-trash"></i></button>
                <button class="btn btn-primary btn-sm" type="button"><i class="fas fa-save"></i></button>




              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>



    </div>

  </div>

  <div class="card-body">


  </div>



</div>



@endsection