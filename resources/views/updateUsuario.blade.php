@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<nav aria-label="breadcrumb" class="">
  <ol class="breadcrumb shadow p-3 mb-4 bg-light rounded">
    <li class="breadcrumb-item active" aria-current="page">Actualizar Usuarios</li>
  </ol>
</nav>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Panel de Actualizacion de Usuarios</h5>

    </div>



  </div>
  <div class="container">
    <div class="row mx-2 p-2 d-flex justify-content-between">
      <div class="card card-usuario">
        @foreach ($usuario as $user)
        <form id="fActualizacionUsuarios">
          <div class="d-block  bd-highlight">
            <label class="form-label" for="name">Nombre:</label>
                         
            <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" value="{{$user->name}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="lastname">Apellido</label>
            <input type="text" class="form-control" placeholder="Apellido" id="lastname" name="lastname" value="{{$user->lastname}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="user">User</label>
            <input type="text" class="form-control" placeholder="Usuario" id="user" name="user"  value="{{$user->user}}" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$user->email}}" required>
          </div>


          <div class="mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label class="form-label " for="intentos">Intentos</label>
            <input type="number" class="form-control" id="intentos" name="intentos" value="{{$user->intentos}}" required>
          </div>
        
          <div class="mb-3">
            <label class="form-label " for="inputIntentos">Estado:</label>
            <select class="form-control form-control-sm"  id="estado">
            <option value="0">Seleccionar un estado...</option>
            @foreach ($estados as $data)
              <option value="{{$data["id"]}}"  {{ $user->estado == $data["id"] ? 'selected' : ''}}>{{$data["valor_estado"]}}</option>
            @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label " for="inputRol">Rol:</label>
            <select class="form-control form-control-sm" id="rol">
            <option value="0">Seleccionar un rol...</option>

            @foreach ($roles as $data)
              <option value="{{$data["id"]}}"  {{ $user->role_id == $data["id"] ? 'selected' : ''}}>{{$data["name"]}}</option>

              @endforeach
            </select>
          </div>

          <button type="button" onclick="valoresDefecto()" id="btnRegistrar" class="btn btn-info">Registrar</button>
          <button type="button" onclick="activarCampos();" class="btn btn-info" id="btnNuevoRegistro" hidden>Nuevo Registro</button>

        </form>
        @endforeach
      </div>


    </div>

  </div>

  <div class="card-body">


  </div>



</div>

<script>
 function Send(){
    let name = $("#name").val();
    let lastname = $("#lastname").val();
    let user =$("#user").val();
    let email =$("#email").val();
    let password =$("#password").val();
    let rol =$("#rol").val();
    let estado =$("#estado").val();
    console.log(estado);

    


    $.post("../api/usuarioR/add",
    {"name":name, "lastname":lastname, "user":user, "email":email, "password":password, "rol":rol, "estado":estado}
    , function(data){
        let resultado = data['Estado'];
        if(resultado=="Exitoso"){
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'success',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })

            $("#btnRegistrar").prop('hidden', true);

            $("#btnNuevoRegistro").prop('hidden', false);
            desactivarCampos();



        }else{  
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'error',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })
           

            

        }
     

    }
    
    
    );
  }

  
  
  function desactivarCampos(){
    $("#name").prop("readonly", true);
    $("#lastname").prop("readonly", true);
    $("#user").prop("readonly", true);
    $("#email").prop("readonly", true);
    $("#password").prop("readonly", true);
    $("#intentos").prop("readonly", true);

    $("#estado").prop("disabled", true);
    $("#rol").prop("disabled", true);

  }


  function activarCampos(){
    $('#fRegistroUsuarios').trigger("reset");
    $("#name").prop("readonly", false);
    $("#lastname").prop("readonly", false);
    $("#user").prop("readonly", false);
    $("#email").prop("readonly", false);
    $("#password").prop("readonly", false);
    $("#intentos").prop("readonly", false);

    $("#estado").prop("disabled", false);
    $("#rol").prop("disabled", false);


    $("#btnRegistrar").prop('hidden', false);
    $("#btnNuevoRegistro").prop('hidden', true);
  }

</script>



@endsection