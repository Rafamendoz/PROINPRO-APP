@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h2 text-gray-800 text-center">Profile</h1>
<h5 class="text-gray-800 text-center">I am XXXXXX</h5>


<!-- DataTales Example -->
<div class="container mt-5  mx-5 ">
  <div class="row">
    <div class="col ">
      <div class="card-body">
        <h5 class="card-title">About me</h5>
        <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
          card's
          content. Some quick example text to build on the card title and make up the bulk of the
          card's
          content</p>
      </div>
    </div>
    <div class="col">

      <img src="{{ asset('person.jpg')}}" class="rounded-circle" alt="person" width="280" height="230">




    </div>
    <div class="col">
      <div class="card-body text-justify">
        <h5 class="card-title text-dark">Details</h5>
        <h6 class="card-subtitle text-dark">Name</h6>
        <p class="card-text"><small class="text-body-secondary">Ana Paz</small></p>
        <h6 class="card-subtitle text-dark fw-bold">Rol</h6>
        <p class="card-text"><small class="text-body-secondary">Rol</small></p>
        <h6 class="card-subtitle text-dark fw-bold">Rol</h6>
        <p class="card-text"><small class="text-body-secondary">Rol</small></p>

      </div>
    </div>
  </div>
</div>



@endsection