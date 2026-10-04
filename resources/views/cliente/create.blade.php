@extends('layouts.app')

@section('title', 'Agregar Cliente')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">Agregar Cliente</div>
    <div class="card-body">
        <form action="{{ route('cliente.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="Apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="Fecha_Nac" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
