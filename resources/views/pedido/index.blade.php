@extends('layouts.app')

@section('title', 'Listado de Pedidos')

@section('content')
<div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center bg-dark text-white">
        <span>Listado de Pedidos</span>
        <a href="{{ route('pedido.create') }}" class="btn btn-success btn-sm">Agregar</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Fecha Pedido</th>
                    <th>Fecha Entrega</th>
                    <th>Cliente</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($pedido->Fecha_Pedido)->format('m/d/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($pedido->Fecha_Entrega)->format('m/d/Y') }}</td>
                        <td>{{ $pedido->cliente?->Nombre }} {{ $pedido->cliente?->Apellido ?? 'Sin cliente' }}</td>
                        <td>{{ $pedido->Observaciones }}</td>
                        <td>
                            <a href="{{ route('pedido.show', $pedido) }}" class="btn btn-info btn-sm">Ver Detalle</a>
                            <a href="{{ route('pedido.edit', $pedido) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('pedido.destroy', $pedido) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar este pedido?');">
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
