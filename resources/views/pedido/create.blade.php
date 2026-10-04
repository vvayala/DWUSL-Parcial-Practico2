@extends('layouts.app')

@section('title', 'Agregar Pedido')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white">Agregar Pedido</div>
    <div class="card-body">
        <form action="{{ route('pedido.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Fecha Pedido</label>
                <input type="date" name="Fecha_Pedido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha Entrega</label>
                <input type="date" name="Fecha_Entrega" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Cliente</label>
                <select name="Id_Cliente" class="form-control" required>
                    @foreach(\App\Models\Cliente::all() as $cliente)
                        <option value="{{ $cliente->Id_Cliente }}"> {{ $cliente->Nombre }} {{ $cliente->Apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Observaciones</label>
                <textarea name="Observaciones" class="form-control"></textarea>
            </div>

            <h5 class="mt-4">Detalles del Pedido</h5>
            <div id="detalles">
                <div class="row mb-2">
                    <div class="col">
                        <select name="detalles[0][Id_Articulo]" class="form-control" required>
                            @foreach(\App\Models\Articulo::all() as $articulo)
                                <option value="{{ $articulo->Id_Articulo }}">{{ $articulo->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <input type="number" name="detalles[0][Cantidad]" class="form-control" placeholder="Cantidad" required>
                    </div>
                    <div class="col">
                        <input type="number" step="0.01" name="detalles[0][Descuento]" class="form-control" placeholder="Descuento (%)">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('pedido.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
