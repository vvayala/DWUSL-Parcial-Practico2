@extends('layouts.app')

@section('title', 'Detalle del Pedido')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">
        Detalle del Pedido #{{ $pedido->Id_Pedido }}
    </div>
    <div class="card-body">
        <p><strong>Fecha Pedido:</strong> {{ \Carbon\Carbon::parse($pedido->Fecha_Pedido)->format('d/m/Y') }}</p>
        <p><strong>Fecha Entrega:</strong> {{ \Carbon\Carbon::parse($pedido->Fecha_Entrega)->format('d/m/Y') }}</p>
        <p><strong>Cliente:</strong> {{ $pedido->cliente?->Nombre }} {{ $pedido->cliente?->Apellido ?? 'Sin cliente' }}</p>
        <p><strong>Observaciones:</strong> {{ $pedido->Observaciones }}</p>

        <h5 class="mt-4">Artículos del Pedido</h5>
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Artículo</th>
                    <th>Cantidad</th>
                    <th>Descuento</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pedido->detalles as $detalle)
                    <tr>
                        <td>{{ $detalle->articulo?->Nombre ?? 'Sin artículo' }}</td>
                        <td>{{ $detalle->Cantidad }}</td>
                        <td>{{ number_format($detalle->Descuento * 100, 0) }}%</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Este pedido no tiene detalles registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('pedido.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
    </div>
</div>
@endsection
