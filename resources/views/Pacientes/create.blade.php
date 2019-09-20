@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Crear Paciente Registro
                </div>
                <div class="card-body">
                    <form action="{{ route('paciente.store')}}" method="PUT">
                    @csrf
                            <div class="form-group">
                                <label>Numero Registro</label>
                                <input type="number" class="form-control" name="numero_registro" required>
                            </div>
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="nombres" required>
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" required>
                            </div>
                            <div class="form-group">
                                <label>Servicios</label>
                                <input type="text" class="form-control" name="servicios" required>
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