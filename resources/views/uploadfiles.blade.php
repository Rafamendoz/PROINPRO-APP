@extends('panelp')


@section('tablabase')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Archivos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
          <h5 class=" font-weight-bold text-info">Panel de Archivos</h5>
        </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <!-- Topbar Search -->  
        </div>
    </div>

    <div class="container ">
      <div class="row ">

      
      </div>

    </div>

    <div class="card-body">
      <div class="row p-4">
        <div class="col-md-6 p-4">
            <div class="form-group"> 
              <label for="">Proyecto:</label>
              <label for=""><b>{{$proyecto->nombre_proyecto}}</b></label>
            </div>

            <div class="form-group"> 
              <label for="">Total de Archivos Actuales bajo el Proyecto:</label>
              <label for=""><b>5</b></label>
            </div>
            <br>
            <br>
            <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <input type="file" name="file" id="file">
                    <input type="text" name="Proyecto" value="{{ csrf_token() }}"  >
                  </div>
                  <button type="button" onclick="test()" class="btn btn-primary">Subir Archivo</button>
                
      
            </form>

    
        </div>

        <div class="col-md-6">
          <img src="{{asset('build/img/Pronaders-1.jpg')}}" alt="" srcset="">
        </div>
      </div>
    </div>
 
</div>

<script>
   function test(){
    let valores = document.getElementById('file').value
  alert(valores);

  $.ajax({
                headers: {
                  'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                file:  valores, //datos que se envian a traves de ajax
                url:   '{{route('files.store')}}', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);
                }
        });
  }
 



</script>


@endsection