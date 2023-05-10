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
    <div class="col">
      <div class="card-body text-justify">
        <h5 class="card-title text-dark">Details</h5>
        <h6 class="card-subtitle text-dark">Name</h6>
        <p class="card-text"><small class="text-body-secondary">{{auth()->user()->name}}</small></p>
        <h6 class="card-subtitle text-dark fw-bold">Apellido</h6>
        <p class="card-text"><small class="text-body-secondary">{{auth()->user()->lastname}}</small></p>
        <h6 class="card-subtitle text-dark fw-bold">Rol</h6>
        <p class="card-text"><small class="text-body-secondary"></small></p>

      </div>
    </div>



    @endsection