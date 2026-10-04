@extends('layouts.app')

@section('title', 'Agregar Artículo')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">Agregar Artículo</div>
    <div class="card-body">
        <form action="{{ route('articulo.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="Descripcion" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Inventario</label>
                <input type="number" name="CantInventario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" step="0.01" name="Precio" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('articulo.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
