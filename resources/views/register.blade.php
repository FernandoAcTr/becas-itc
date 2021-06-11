@extends('layout.main')

@section('title', 'Formulario de Registro')

@section('body')

    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="a_paterno">Apellido Paterno</label>
                    <input type="text" id="a_paterno" name="a_paterno" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="a_materno">Apellido Materno</label>
                    <input type="text" id="a_materno" name="a_materno" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="num_control" class="mr-4">Género</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="genero" type="radio" id="checkM" value="M" required>
                        <label class="form-check-label" for="checkM">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="genero" type="radio" id="checkF" value="F" required>
                        <label class="form-check-label" for="checkF">Femenino</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_nac">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" required>
                </div>
                <div class="form-group">
                    <label for="num_control">Número de Control</label>
                    <input type="text" id="num_control" name="num_control" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="carrera">Carrera</label>
                    <select name="carrera" id="carrera" class="form-control" required>
                        <option disabled selected>-- Selecciona--</option>
                        @foreach ($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <select name="semestre" id="semestre" class="form-control" required>
                        <option disabled selected>-- Selecciona--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tipo_beca">Tipo de Beca</label>
                    <select name="tipo_beca" id="tipo_beca" class="form-control">
                        <option disabled selected>-- Selecciona--</option>
                        @foreach ($tipos as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row mt-2">
                    <div class="col-2"><label>Carta de motivos</label></div>
                    <div class="col-10"><input type="file" name="carta" class="form-control-file" required></div>
                </div>

                <div class="row mt-2">
                    <div class="col-2"><label>Identificación</label></div>
                    <div class="col-10"><input type="file" name="identificacion" class="form-control-file" required></div>
                </div>

                <div class="row mt-2">
                    <div class="col-2"><label>Comprobante de ingresos</label></div>
                    <div class="col-10"><input type="file" name="comprobante" class="form-control-file" required></div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary my-3">
    </form>
@endsection
