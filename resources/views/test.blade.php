@extends('panelp')


@section('tablabase')
<form id="producto_form" method="POST" action="{{route('files.store')}}">



                <div class="form-group">
                    <label class="form-label" for="prod_nom">Nombre</label>
                    <input type="text" class="form-control" name="prod_nom" id="prod_nom" placeholder="Ingrese el nombre del producto" required>
                </div>
                <div class="form-group">
                   <form action="{{route('files.store')}}" method="post" class="dropzone">

                   </form>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Guardar</button>

            </form>

            <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

           

@endsection