<x-layout>
    <x-slot:title> Perfil </x-slot:title>
    <div class="container mt-4">
        <h1 class="mb-4">Mis productos comprados</h1>
        @if($productosComprados->isEmpty())
            <p>No has comprado ningún producto todavía.</p>
        @else
            <div class="row">
                @foreach($productosComprados as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="card producto-card shadow-sm h-100">
                            <div class="card-header producto-card-header">
                                <span class="badge producto-categoria producto-categoria-{{ $producto->categoria }} text-dark">
                                    {{ ucfirst($producto->categoria) }}
                                </span>
                            </div>
                            <div class="card-body producto-card-body">
                                <h5 class="producto-titulo">{{ $producto->titulo }}</h5>
                                <p class="card-text">{{ $producto->descripcion }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>