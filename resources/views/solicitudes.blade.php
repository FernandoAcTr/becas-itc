@extends('layout.main')

@section('body')
    <h1>Listado de Solicitudes Capturadas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Género</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Número de control</th>
                <th scope="col">Carrera</th>
                <th scope="col">Semestre</th>
                <th scope="col">Tipo de Beca</th>
                <th scope="col">
                    <!---Acciones-->
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitudes as $solicitud)
                <tr>
                    <th scope="row">{{ $solicitud->id }}</th>
                    <td>{{ "$solicitud->nombre $solicitud->a_paterno $solicitud->a_materno" }}</td>
                    <td>{{ $solicitud->domicilio }}</td>
                    <td>{{ $solicitud->genero }}</td>
                    <td>{{ $solicitud->fecha_nac }}</td>
                    <td>{{ $solicitud->num_control }}</td>
                    <td>{{ $solicitud->carrera->carrera }}</td>
                    <td>{{ $solicitud->semestre }}</td>
                    <td>{{ $solicitud->tipoBeca->tipo }}</td>
                    <td><a href="/solicitudes/{{ $solicitud->id }}" class="btn btn-sm btn-info">Detalles</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
