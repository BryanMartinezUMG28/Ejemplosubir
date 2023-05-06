@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section("contenido")

    <div class="card">
        <h5 class="card-header">Agregar nuevo transporte</h5>
        <div class="card-body">


            <p class="card-text">


            <form action="{{route('transportes.store')}}" method="POST">
                @csrf
                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required>

                <label for="">Nombre transporte</label>
                <input type="text" name="nombre" class="form-control" required>

                <label for="">Razon social</label>
                <input type="text" name="razon_social" class="form-control" required>


                <br>
                <a href="{{route("transportes.index")}}" class="btn btn-danger">
                    <span class="fas fa-undo-alt"></span> Regresar</a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar</button>

            </form>
            </p>
        </div>
    </div>
@endsection
