@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Transportes BryanM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="jeje">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TRANSPORTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CAMIONES</a>
                    </li>
                </ul>
                <span class="navbar-text">
        0909-20-6903 PROGRAMACION III
      </span>
            </div>
        </div>
    </nav>

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

