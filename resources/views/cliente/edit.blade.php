@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">Editar Cliente</div>
    <div class="card-body">
        <form action="{{ route('cliente.update', $cliente) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" value="{{ $cliente->Nombre }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="Apellido" class="form-control" value="{{ $cliente->Apellido }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="Fecha_Nac" class="form-control" value="{{ $cliente->Fecha_Nac }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
