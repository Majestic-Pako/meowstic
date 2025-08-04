<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function agregar(Producto $producto)
    {
        Auth::user()->carrito()->syncWithoutDetaching([$producto->productos_id]);
        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function quitar(Producto $producto)
    {
        Auth::user()->carrito()->detach($producto->productos_id);
        return redirect()->route('carrito.ver')->with('success', 'Producto quitado del carrito');
    }

    public function ver()
    {
        $productos = Auth::user()->carrito;
        return view('carrito.index', compact('productos'));
    }

public function finalizar()
{
    $user = Auth::user();
    $productos = $user->carrito;

    foreach ($productos as $producto) {
        $user->compras()->attach($producto->productos_id);
    }

    $user->carrito()->detach();

    return redirect()->route('carrito.ver')->with('success', '¡Compra finalizada!');
}
}
