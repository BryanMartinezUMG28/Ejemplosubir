@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

    <br><br>

    <div class="card">
        <h5 class="card-header text-center">Crud transportes</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title text-center">TRANSPORTES EXISTENTES</h5>
            <p>
                <a href="{{route("transportes.create")}}" class="btn btn-primary">Agregar nuevo transporte</a>
            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Razon social</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>

                    @foreach($datos as $item)

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->razon_social }}</td>
                            <td>

                                <form action="{{ route("transportes.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("transportes.show", $item->id) }}" method="GET">

                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <hr>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>


        </div>
        </p>
    </div>
    </div>


@endsection
