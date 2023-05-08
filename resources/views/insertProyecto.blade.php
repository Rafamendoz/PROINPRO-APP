@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Proyectos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Registro de Proyectos</h5>

    </div>



  </div>
  <div class="container ">
    <div class="row mx-2 p-2 d-flex justify-content-between">
      <div class="card card-usuario">
        <form method="POST" action="#">
          <div class="d-block  bd-highlight">
            <label class="form-label" for="inputProject">Nombre del Proyecto</label>
            <input type="text" class="form-control" placeholder="Nombre" id=" inputProject" name="inputProject"
              required>
          </div>
          <div class="d-block  bd-highlight">
            <label class="form-label" for="inputDescrip">Descripcion del Proyecto</label>
            <textarea class="form-control" placeholder="Ingrese una breve descripcion del proyecto" id=" inputDescrip"
              name="inputDescrip" rows="3" required></textarea>
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