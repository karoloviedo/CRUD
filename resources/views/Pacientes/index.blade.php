@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Lista Pacientes
                <a href="{{ route('paciente.create')}}" class="btn btn-primary float-right">Registrarse</a>
                </div>
                <div class="card-body">
                    @if(session('info'))
                    <div class="alert alert-success">
                    {{ session('info') }}
                    </div>  
                    @endif
                    <table class="table table-hover table-sm">
                        <thead>
                            <th>Numero Registro</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Servicios</th>
                            <th colspan="2">Acciones</th>
                        </thead>
                        <tbody>
                        @foreach($paciente as $paci)                   
                        <tr>
                            <td>
                                {{ $paci->numero_registro }}
                            </td>
                            <td>
                                {{ $paci->nombres }}
                            </td>
                            <td>
                                {{ $paci->apellidos }}
                            </td>
                            <td>
                                {{ $paci->servicios }}
                            </td>
                            <td>
                            <a href="{{ route('paciente.edit', $paci->id)}}" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                            <a href="javascript: document.getElementById('delete-{{ $paci->id }}').submit()" class="btn btn-danger">Eliminar</a>
                            <form id="delete-{{ $paci->id }}" action="{{ route('paciente.destroy', $paci->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            </form>
                            </td>
                        </tr>
                            @endforeach
                </tbody>
            </table>
            </div>
            <div class="card-footer">
                    
                        <a href="javascript:document.getElementById('logout').submit()" class="btn btn-warning float-right">Cerrar Sesión</a>
                        <form action="{{ route('logout') }}" id="logout" style="display:none" method="POST"></form>
                        @csrf
            </div>
        </div>
    </div>
</div>
@endsection