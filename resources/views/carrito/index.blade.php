<x-layout>
    <x-slot:title>Tu Carrito</x-slot:title>
    <div class="container mt-4">
        <h2>Carrito de compras</h2>
            <div>
                <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-bag-check me-1"></i> Volver a la Tienda
                </a>
            </div>
        @if($productos->isEmpty())
            <p>No tienes productos en tu carrito.</p>
        @else
            <ul class="list-group mb-3">
                @foreach($productos as $producto)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $producto->titulo }}
                        <form action="{{ route('carrito.quitar', $producto->productos_id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm">Quitar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <form action="{{ route('carrito.finalizar') }}" method="POST">
                @csrf
                <button class="btn btn-primary">Finalizar Compra</button>
            </form>
        @endif
    </div>
</x-layout>