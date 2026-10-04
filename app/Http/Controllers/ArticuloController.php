<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index', compact('articulos'));
    }

    public function create()
    {
        return view('articulo.create');
    }

    public function store(Request $request)
    {
        Articulo::create($request->all());
        return redirect()->route('articulo.index');
    }

    public function edit(Articulo $articulo)
    {
        return view('articulo.edit', compact('articulo'));
    }

    public function update(Request $request, Articulo $articulo)
    {
        $articulo->update($request->all());
        return redirect()->route('articulo.index');
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->route('articulo.index');
    }

    public function show(Articulo $articulo)
    {
        return view('articulo.show', compact('articulo'));
}

}
