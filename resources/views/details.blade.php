@extends('layout.main')

@section('title', 'Formulario de Registro')

@section('body')

    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" value="{{ $solicitud->nombre }}" readonly>
                </div>
                <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input type="text" class="form-control" value="{{ $solicitud->a_paterno }}" readonly>
                </div>
                <div class="form-group">
                    <label>Apellido Materno</label>
                    <input type="text" class="form-control" value="{{ $solicitud->a_materno }}" readonly>
                </div>
                <div class="form-group">
                    <label>Domicilio</label>
                    <input type="text" class="form-control" value="{{ $solicitud->domicilio }}" readonly>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Genero</label>
                        @if ($solicitud->genero == 'M')
                            <input type="text" class="form-control" value="Masculino" readonly>
                        @else
                            <input type="text" class="form-control" value="Femenino" readonly>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Fecha de Nacimiento</label>
                    <input type="text" class="form-control" value="{{ $solicitud->fecha_nac }}" readonly>
                </div>
                <div class="form-group">
                    <label>Número de Control</label>
                    <input type="text" class="form-control" value="{{ $solicitud->num_control }}" readonly>
                </div>
                <div class="form-group">
                    <label>Carrera</label>
                    <input type="text" class="form-control" value="{{ $solicitud->carrera->carrera }}" readonly>
                </div>
                <div class="form-group">
                    <label>Semestre</label>
                    <input type="text" class="form-control" value="{{ $solicitud->semestre }}" readonly>
                </div>
                <div class="form-group">
                    <label>Tipo de Beca</label>
                    <input type="text" class="form-control" value="{{ $solicitud->tipoBeca->tipo }}" readonly>
                </div>
            </div>
        </div>
    </form>

    <div class="row justify-center text-center mb-4">
        <div class="col-4">
            <iframe src="{{ $url_comprobante }}" frameborder="0" height="500"></iframe>
            <a href="{{ $url_comprobante }}" target="_blank" rel="noopener noreferrer"
                class="btn btn-sm btn-primary">Pantalla completa</a>
        </div>
        <div class="col-4">
            <iframe src="{{ $url_carta }}" frameborder="0" height="500"></iframe>
            <a href="{{ $url_carta }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-primary">Pantalla
                completa</a>
        </div>
        <div class="col-4">
            <iframe src="{{ $url_identificacion }}" frameborder="0" height="500"></iframe>
            <a href="{{ $url_identificacion }}" target="_blank" rel="noopener noreferrer"
                class="btn btn-sm btn-primary">Pantalla completa</a>
        </div>
    </div>

@endsection
