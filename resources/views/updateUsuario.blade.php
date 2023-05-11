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
     
        <form id="fActualizacionUsuarios">
          <div class="d-block  bd-highlight">
            <label class="form-label" for="name">Nombre:</label>
                         
            <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" value="{{$usuario[0]->name}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="lastname">Apellido</label>
            <input type="text" class="form-control" placeholder="Apellido" id="lastname" name="lastname" value="{{$usuario[0]->lastname}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="user">User</label>
            <input type="text" class="form-control" placeholder="Usuario" id="user" name="user"  value="{{$usuario[0]->user}}" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$usuario[0]->email}}" required>
          </div>


          <div class="mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label class="form-label " for="intentos">Intentos</label>
            <input type="number" class="form-control" id="intentos" name="intentos" value="{{$usuario[0]->intentos}}" required>
          </div>
        
          <div class="mb-3">
            <label class="form-label " for="inputIntentos">Estado:</label>
            <select class="form-control form-control-sm"  id="estado">
            <option value="0">Seleccionar un estado...</option>
            @foreach ($estados as $data)
              <option value="{{$data["id"]}}"  {{ $usuario[0]->estado == $data["id"] ? 'selected' : ''}}>{{$data["valor_estado"]}}</option>
            @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label " for="inputRol">Rol:</label>
            <select class="form-control form-control-sm" id="rol">
            <option value="0">Seleccionar un rol...</option>

            @foreach ($roles as $data)
              <option value="{{$data["id"]}}"  {{ $usuario[0]->role_id == $data["id"] ? 'selected' : ''}}>{{$data["name"]}}</option>

              @endforeach
            </select>
          </div>

          <button type="button" onclick="Update()" id="btnActualizar" class="btn btn-info">Actualizar</button>

        </form>
        
      </div>


    </div>

  </div>

  <div class="card-body">


  </div>



</div>

<script>
 function Update(){
    let name = $("#name").val();
    let lastname = $("#lastname").val();
    let user =$("#user").val();
    let email =$("#email").val();
    let password =$("#password").val();
    let intentos =$("#intentos").val();
    let rol =$("#rol").val();
    let estado =$("#estado").val();
    let id = {{$usuario[0]->id}};
    let data1={};
    if(password==""){
      data1 = {"name":name, "id":id, "intentos":intentos,"lastname":lastname, "user":user, "email":email, "rol":rol, "estado":estado};
    console.log(data1);
    }else{
       data1 = {"name":name,  "id":id,"intentos":intentos,"lastname":lastname, "user":user, "email":email, "password":password, "rol":rol, "estado":estado};

    }
   


    $.ajax({url:"../../api/usuarioR/update/{{$usuario[0]->id}}", type:"put",contentType: "application/json",
    data: JSON.stringify(data1)
    , success: function(data){
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
              },
              willClose: () => {
                location.reload();
              }
            })

            Toast.fire({
              icon: 'success',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })

          



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
              },
              willClose: () => {
                location.reload();
              }
            })

            Toast.fire({
              icon: 'error',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })
           

            

        }
     

    }
    
    
    });
  }

  



</script>



@endsection