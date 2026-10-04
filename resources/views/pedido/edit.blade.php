@extends('layouts.app')

@section('title', 'Editar Pedido')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">Editar Pedido #{{ $pedido->Id_Pedido }}</div>
    <div class="card-body">
        <form action="{{ route('pedido.update', $pedido) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Fecha Pedido</label>
                <input type="date" name="Fecha_Pedido" class="form-control" 
                       value="{{ \Carbon\Carbon::parse($pedido->Fecha_Pedido)->format('Y-m-d') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Entrega</label>
                <input type="date" name="Fecha_Entrega" class="form-control" 
                       value="{{ \Carbon\Carbon::parse($pedido->Fecha_Entrega)->format('Y-m-d') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Cliente</label>
                <select name="Id_Cliente" class="form-control" required>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->Id_Cliente }}" 
                                {{ $pedido->Id_Cliente == $cliente->Id_Cliente ? 'selected' : '' }}>
                            {{ $cliente->Nombre }} {{ $cliente->Apellido }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Observaciones</label>
                <textarea name="Observaciones" class="form-control">{{ $pedido->Observaciones }}</textarea>
            </div>

            <h5 class="mt-4">Detalles del Pedido</h5>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Descuento (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedido->detalles as $i => $detalle)
                            <tr>
                                <td>
                                    <select name="detalles[{{ $i }}][Id_Articulo]" class="form-control" required>
                                        @foreach(\App\Models\Articulo::all() as $articulo)
                                            <option value="{{ $articulo->Id_Articulo }}" 
                                                    {{ $detalle->Id_Articulo == $articulo->Id_Articulo ? 'selected' : '' }}>
                                                {{ $articulo->Nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="detalles[{{ $i }}][Cantidad]" class="form-control" 
                                           value="{{ $detalle->Cantidad }}" required>
                                </td>
                                <td>
                                    <input type="number" step="0.01" name="detalles[{{ $i }}][Descuento]" class="form-control" 
                                           value="{{ $detalle->Descuento * 100 }}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('pedido.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
