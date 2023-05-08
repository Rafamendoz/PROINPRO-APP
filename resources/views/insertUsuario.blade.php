@extends('panelp')


@section('tablabase')
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
    <div class="row mx-2 p-2 d-flex justify-content-between">
      <div class="card card-usuario">
        <form method="POST" action="#">
          <div class="d-block  bd-highlight">
            <label class="form-label" for="name">Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="lastname">Apellido</label>
            <input type="text" class="form-control" placeholder="Apellido" id="lastname" name="lastname" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="user">User</label>
            <input type="text" class="form-control" placeholder="Usuario" id="user" name="user" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
          </div>


          <div class="mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label class="form-label " for="intentos">Intentos</label>
            <input type="number" class="form-control" id="intentos" name="intentos" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="inputCuenta">Cuenta Verificada</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">No</label>
            </div>

          </div>
          <div class="mb-3">
            <label class="form-label " for="inputIntentos">Estado</label>
            <select class="form-control form-control-sm">
              <option>Activo</option>
              <option>Inactivo</option>
            </select>
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