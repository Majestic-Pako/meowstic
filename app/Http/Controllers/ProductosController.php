<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $query = Producto::query();
    
        if ($request->has('categoria')) {
        $query->where('categoria', $request->categoria);
        }
    
    $productos = $query->get();
    
    return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'required|string|max:150',
            'categoria' => 'required|in:peluches,stickers,mods',
        ]);

        Producto::create($request->all());

        return redirect()
            ->route('productos.index')
            ->with('feedback.message', 'El producto <b>' . e($request->titulo) . '</b> fue agregado exitosamente.');
    }

    public function edit(int $id)
    {
        return view('productos.edit', [
            'producto' => Producto::findOrFail($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'required|string|max:150',
            'categoria' => 'required|in:peluches,stickers,mods',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()
            ->route('productos.index')
            ->with('feedback.message', 'El producto <b>' . e($producto->titulo) . '</b> fue actualizado correctamente.');
    }

    public function delete(int $id)
    {
        return view('productos.delete', [
            'producto' => Producto::findOrFail($id)
        ]);
    }

    public function destroy(int $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()
            ->route('productos.index')
            ->with('feedback.message', 'El producto <b>' . e($producto->titulo) . '</b> fue eliminado exitosamente.');
    }
}