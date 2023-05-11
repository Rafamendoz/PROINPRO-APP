@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<nav aria-label="breadcrumb" class="">
  <ol class="breadcrumb shadow p-3 mb-4 bg-light rounded">
    <li class="breadcrumb-item active" aria-current="page">Ver Usuarios</li>
  </ol>
</nav>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Listado de Usuarios Activos</h5>

    </div>



  </div>
 


  <div class="card-body">
 
          <div class="table-responsive">
                  <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                      <thead class="text-center">
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Email</th>
                          <th>Intentos</th>
                          <th>Usuario</th>
                          <th>Estado</th>
                          <th>Creado</th>
                          <th>Actualizado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody class="text-center">
                        @foreach ($usuarios as $user)
                          <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->lastname }}</td>
                              <td>{{$user->email }}</td>
                              <td>{{$user->intentos}}</td>
                              <td>{{$user->user }}</td>
                              <td>{{$user->valor_estado }}</td>
                              <td>{{$user->created_at }}</td>
                              <td>{{$user->updated_at }}</td>
                       

                              <td>
                                <button class="btn btn-danger btn-sm" type="button" onclick="Delete({{$user->id}})"><i class="fas fa-trash"></i></button>
                                <a class="btn btn-primary btn-sm" href="../usuario/update/{{$user->user}}"><i class="fas fa-edit"></i></a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
            </div>

    </div>

  



</div>


<script>
 function Delete(userid){
    
    let data1={};

    data1 = {"estado":2};
    console.log(data1);
 
   


    $.ajax({url:"../api/usuarioR/delete/"+userid, type:"put",contentType: "application/json",
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