@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb shadow p-3 mb-4 bg-light rounded">
    <li class="breadcrumb-item active" aria-current="page">Estados</li>
  </ol>
</nav>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <h5 class=" font-weight-bold text-info">Creacion de Estados</h5>

    </div>



  </div>
  <div class="container ">
    <div class="row mx-2 p-2 d-flex justify-content-between">
      <div class="card card-usuario mb-5">
        <form method="POST" action="#">
          <div class="d-block  bd-highlight">
            <label class="form-label" for="valor_estado">Nombre del Estado</label>
            <input type="text" class="form-control" placeholder="Ingrese estado" id="valor_estado" name="valor_estado" required>
          </div>


          <button type="button" onclick="Send()" id="btnRegistrar"" class="btn btn-info mt-2">Registrar</button>

        </form>
      </div>
      <div class="table-responsive  mb-2">
        <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>Id</th>
              <th>Nombre del Estado</th>
              <th>Creado</th>
              <th>Actualizado</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody class="text-center">
            @foreach($estados as $estado)
            <tr>
              <td>{{$estado->id}}</td>
              <td>{{$estado->valor_estado}}</td>
              <td>{{$estado->created_at}}</td>
              <td>{{$estado->updated_at}}</td>
              <td>
                <button class="btn btn-danger btn-sm"  type="button"><i class="fas fa-trash"></i></button>
                <button class="btn btn-primary btn-sm"  type="button"><i class="fas fa-save"></i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>

  </div>





</div>

<script>

function Send(){
    let valor_estado = $("#valor_estado").val();
  
    $.post("{{route('registrarEstado')}}",
    {"valor_estado":valor_estado}
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
                
              },
              willClose: () => {
                location.reload();
              }
              
            })

            Toast.fire({
              icon: 'success',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })

            $("#btnRegistrar").prop('hidden', true);

       



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

 



</script>


@endsection