<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with(['cliente'])->get();
        return view('pedido.index', compact('pedidos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('pedido.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $pedido = Pedido::create($request->only([
            'Fecha_Pedido',
            'Fecha_Entrega',
            'Observaciones',
            'Id_Cliente'
        ]));

        if ($request->has('detalles')) {
            foreach ($request->detalles as $detalle) {
                $pedido->detalles()->create([
                    'Id_Articulo' => $detalle['Id_Articulo'],
                    'Cantidad'    => $detalle['Cantidad'],
                    'Descuento'   => $detalle['Descuento'] / 100,
                ]);
            }
        }

        return redirect()->route('pedido.index');
    }

    public function edit(Pedido $pedido)
    {
        $clientes = Cliente::all();
        $pedido->load('detalles.articulo');
        return view('pedido.edit', compact('pedido','clientes'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->only([
            'Fecha_Pedido',
            'Fecha_Entrega',
            'Observaciones',
            'Id_Cliente'
        ]));

        $pedido->detalles()->delete();

        if ($request->has('detalles')) {
            foreach ($request->detalles as $detalle) {
                $pedido->detalles()->create([
                    'Id_Articulo' => $detalle['Id_Articulo'],
                    'Cantidad'    => $detalle['Cantidad'],
                    'Descuento'   => $detalle['Descuento'] / 100,
                ]);
            }
        }

        return redirect()->route('pedido.index');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedido.index');
    }

    public function show(Pedido $pedido)
    {
        $pedido->load('cliente','detalles.articulo');
        return view('pedido.show', compact('pedido'));
    }
}
