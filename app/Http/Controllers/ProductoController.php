<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get(); // carga la relación
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|min:3',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Producto::create($validated);

        return redirect()->route('productos.index')->with('success', 'Producto creado.');
    }

    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|min:3',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($validated);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado.');
    }

    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado.');
    }
}
