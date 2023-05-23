@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section("contenido")

    <div class="card">
        <h5 class="card-header">Actualizar transporte</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{route('transportes.update', $transportes->id)}}" method="POST">
                @csrf


                @method("PUT")

                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$transportes->id}}">

                <label for="">Nombre transporte</label>
                <input type="text" name="nombre" class="form-control" required value="{{$transportes->nombre}}">

                <label for="">Razon social</label>
                <input type="text" name="razon_social" class="form-control" required value="{{$transportes->razon_social}}">

                <br>
                <a href="{{route("transportes.index")}}" class="btn btn-danger">
                    <span class="fas fa-undo-alt"></span> Regresar</a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar</button>

            </form>
            </p>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        swal("¿Algun dato a actualizar?", "Haz click en OK, para continuar y actualizar tus datos de transporte!");


    </script>
@endsection
