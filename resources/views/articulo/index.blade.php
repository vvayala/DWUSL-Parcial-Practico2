@extends('layouts.app')

@section('title', 'Listado de Artículos')

@section('content')
<div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center bg-dark text-white">
        <span>Listado de Artículos</span>
        <a href="{{ route('articulo.create') }}" class="btn btn-success btn-sm">Agregar</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Inventario</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articulos as $articulo)
                    <tr>
                        <td>{{ $articulo->Nombre }}</td>
                        <td>{{ $articulo->Descripcion }}</td>
                        <td>{{ $articulo->CantInventario }}</td>
                        <td>${{ $articulo->Precio }}</td>
                        <td>
                            <a href="{{ route('articulo.edit', $articulo) }}" class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('articulo.destroy', $articulo) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar este artículo?');">
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
