<?php

use Illuminate\Support\Facades\Route;
use App\Models\Articulo;
Use App\Models\Cliente;
Use App\Models\Pedido;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidosController;

Route::resource('articulo', ArticuloController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('pedido', PedidosController::class);

Route::get('/', function () {
    $integrantes = [
    ['Nombres' => 'Vilic', 'Apellidos' => 'Ayala Sandoval', 'Grupo' => 'Equipo Numero 12'],
    ['Nombres' => 'Juan Antonio', 'Apellidos' => 'Martinez Nieto', 'Grupo' => 'Equipo Numero 12'],
    ['Nombres' => 'Oscar Moises', 'Apellidos' => 'Perez Tobar', 'Grupo' => 'Equipo Numero 12']
    ];

    return view('Home', ['integrantes' => $integrantes]);
});


