<x-layout>
    <x-slot:title>Productos</x-slot:title>
    
    @section('styles')
        <link href="{{ asset('css/productos.css') }}" rel="stylesheet">
    @endsection
    
    <div class="productos-container">
        <!-- Encabezado -->
        <div class="productos-header">
            <h1 class="productos-title">Bienvenidos a Nuestros Productos</h1>
            <p class="productos-subtitle">En este espacio encontrarás mods, peluches, fondos y más sobre Stardew Valley</p>
        </div>
        
        <!-- Controles superiores -->
        <div class="productos-controls container">
            <a href="{{ route('productos.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i>+ Publicar nuevo Producto
            </a>
            
            <!-- Filtro por categorías -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-filter"></i> Filtrar por categoría
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="?categoria=peluches">Peluches</a></li>
                    <li><a class="dropdown-item" href="?categoria=stickers">Stickers</a></li>
                    <li><a class="dropdown-item" href="?categoria=mods">Mods</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="?">Todas las categorías</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($productos as $producto)
                <div class="col-md-4 mb-4">
                    <div class="card producto-card shadow-sm">
                        <div class="card-header producto-card-header">
                            <span class="badge producto-categoria producto-categoria-{{ $producto->categoria }} text-dark">
                                {{ ucfirst($producto->categoria) }}
                            </span>
                            <div class="d-flex">
                                <a href="{{ route('productos.edit', $producto->productos_id) }}" class="btn-editar no-bootstrap" title="Editar">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('productos.delete', $producto->productos_id) }}" class="btn-eliminar no-bootstrap"  title="Eliminar">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Contenido del producto -->
                        <div class="card-body producto-card-body">
                            <h5 class="producto-titulo">{{ $producto->titulo }}</h5>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                        </div>
                        
                        <!-- Barra inferior convertida completamente en botón de compra -->
                        <a href="#" class="btn-comprar">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-cart3 me-2"></i> Comprar ahora
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>