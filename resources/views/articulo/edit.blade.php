@extends('layouts.app')

@section('title', 'Editar Artículo')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">Editar Artículo</div>
    <div class="card-body">
        <form action="{{ route('articulo.update', $articulo) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" value="{{ $articulo->Nombre }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="Descripcion" class="form-control" required>{{ $articulo->Descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Inventario</label>
                <input type="number" name="CantInventario" class="form-control" value="{{ $articulo->CantInventario }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" step="0.01" name="Precio" class="form-control" value="{{ $articulo->Precio }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('articulo.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
