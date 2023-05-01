@extends('panelp')


@section('usuario')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Usuarios</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Registro de Usuarios</h5>

    </div>



  </div>
  <div class="container ">
    <div class="row ">
      <div class="card my-5 p-3">
        <form method="POST" action="#">
          <div class="mb-3">
            <label class="form-label" for="inputUser">User</label>
            <input type="text" class="form-control" placeholder="Usuario id=" inputUser" name="inputUser" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" class="form-control" placeholder="Email" id="inputEmail" name="inputEmail" required>
          </div>


          <div class="mb-3">
            <label class="form-label" for="inputPass">Password</label>
            <input type="password" class="form-control" placeholder="Password" id="inputPass" name="inputPass" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="inputEmail">Intentos</label>
            <input type="number" class="form-control" id="inputIntentos" name="inputIntentos" required>
          </div>

          <button type="submit" class="btn btn-info">Registrar</button>
        </form>
      </div>


    </div>

  </div>

  <div class="card-body">


  </div>



</div>



@endsection