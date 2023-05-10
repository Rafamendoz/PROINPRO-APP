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
        <form id="fRegistroProyectos">
          <div class="d-block  bd-highlight">
            <label class="form-label" for="inputProject" >Nombre del Proyecto:</label>
            <input type="text" class="form-control" placeholder="Nombre" id="inputProject" name="nombre_proyecto" required>
          </div>
          <div class="d-block  bd-highlight">
            <label class="form-label mt-3" for="inputDescrip">Descripcion del Proyecto:</label>
            <textarea class="form-control" placeholder="Ingrese una breve descripcion del proyecto" id="inputDescrip"
              name="descripcion" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label mt-3" for="inputIntentos">Estado:</label>
            <select class="form-control form-control-sm" id="estado">
              @foreach($estados as $data)
              <option value="1">{{$data['valor_estado']}}</option>

              @endforeach
            </select>
          </div>

          <button type="button" onclick="Send();" class="btn btn-info" id="btnRegistrar">Registrar</button>
          <button type="button" onclick="activarCampos();" class="btn btn-info" id="btnNuevoRegistro" hidden>Nuevo Registro</button>

        </form>
      </div>


    </div>

  </div>

  <div class="card-body" id="CardBody">

  </div>

  



</div>

<script>

  function Send(){
    let nombre_proyecto = $("#inputProject").val();
    let descripcion = $("#inputDescrip").val();
    let estado =$("#estado").val();
    
    $.post("{{route('insertarProyecto')}}",
    {"nombre_proyecto":nombre_proyecto, "descripcion":descripcion, "estado":estado}
    , function(data){
        let resultado = data['Estado'];
        if(resultado=="Existoso"){
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
    $("#inputProject").prop("readonly", true);
    $("#inputDescrip").prop("readonly", true);
    $("#estado").prop("disabled", true);
  }

  function activarCampos(){
    $('#fRegistroProyectos').trigger("reset");
    $("#inputProject").prop("readonly", false);
    $("#inputDescrip").prop("readonly", false);
    $("#estado").prop("disabled", false);
    $("#btnRegistrar").prop('hidden', false);
    $("#btnNuevoRegistro").prop('hidden', true);
  }

</script>



@endsection