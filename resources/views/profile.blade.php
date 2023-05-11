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
  <div class="card-header bg-white py-0">
    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
      <h1 class=" text-info text-center mt-2"> Mi Perfil</h1>

    </div>
    <div class="container ">
      <div class="row mx-2 p-2 justify-content-center ">


        <div class="card card-profile mb-5 mx-3">
          <div class="row">
            <div class="col-md-6">
              <img src="{{ asset('img/undraw_profile_2.svg')}}" class="card-img rounded-circle" alt="person"
                id="images">

            </div>
            <div class="col-md-4  mt-5">
              <div class="card-body text-center">
                <h1 class="card-title text-info mb-4"><strong>Informacion</strong></h1>
                <h3 class="card-text text-info text-justify"><strong>Nombre: </strong>
                  {{auth()->user()->name}}</h3><br>

                <h3 class="card-text text-info text-justify"><strong>Apellido: </strong>
                  {{auth()->user()->lastname}}</h3><br>

                <h3 class="card-text text-info text-justify"><strong>Rol:
                </strong>  {{$rol_actual[0]['name']}}</h3>


              </div>
            </div>
          </div>
        </div>


      </div>
    </div>



    @endsection