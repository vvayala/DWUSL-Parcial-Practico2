@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card shadow">
    <div class="card-header text-center bg-dark text-white">
        Integrantes del Equipo
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Grupo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($integrantes as $integrante)
                    <tr>
                        <td>{{ $integrante['Nombres'] }}</td>
                        <td>{{ $integrante['Apellidos'] }}</td>
                        <td>{{ $integrante['Grupo'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
