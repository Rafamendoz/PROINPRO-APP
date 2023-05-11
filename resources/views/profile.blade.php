@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb shadow p-3 mb-2 bg-light rounded">
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>





<!-- DataTales Example -->
<div class="card shadow mb-4 ">

  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Mi Perfil</h5>

    </div>



  </div>
  <div class="container  ">
    <div class="row mx-2 p-2 justify-content-center ">


      <div class="card card-profile mb-5 mx-3">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('img/undraw_profile_2.svg')}}" class="card-img rounded-circle" alt="person" id="images">

          </div>
          <div class="col-md-5  mt-5 me-3">
            <div class="card-body text-justify">
              <h3 class="card-title text-info mb-4"><strong>Informacion</strong></h3>
              <h5 class="card-text text-info text-justify"><strong>Nombre: </strong>
                {{auth()->user()->name}}</h5><br>

              <h5 class="card-text text-info text-justify"><strong>Apellido: </strong>
                {{auth()->user()->lastname}}</h5><br>

              <h5 class="card-text text-info text-justify"><strong>Rol:
                </strong> {{$rol_actual[0]['name']}}</h5>


            </div>

          </div>
        </div>
      </div>


    </div>
  </div>

</div>



@endsection