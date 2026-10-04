@extends('layouts.app')

@section('title', 'Listado de Clientes')

@section('content')
<div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center bg-dark text-white">
        <span>Listado de Clientes</span>
        <a href="{{ route('cliente.create') }}" class="btn btn-success btn-sm">Agregar</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->Nombre }}</td>
                        <td>{{ $cliente->Apellido }}</td>
                        <td>{{ \Carbon\Carbon::parse($cliente->Fecha_Nac)->toDateString() }}</td>
                        <td>
                            <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('cliente.destroy', $cliente) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar este cliente?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
