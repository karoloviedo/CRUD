@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Editar Paciente
                </div>
                <div class="card-body">
                    <form action="{{ route('paciente.update', $paciente->id)}}" method="POST">
                    @method('put')
                    @csrf
                            <div class="form-group">
                                <label>Numero Registro</label>
                                <input type="number" class="form-control" name="numero_registro" value="{{ $paciente->numero_registro}}">
                            </div>
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="nombres" value="{{ $paciente->nombres }}">
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" value="{{ $paciente->apellidos }}">
                            </div>
                            <div class="form-group">
                                <label>Servicios</label>
                                <input type="text" class="form-control" name="servicios" value="{{ $paciente->servicios }}">
                            </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{ route('pacientes.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection