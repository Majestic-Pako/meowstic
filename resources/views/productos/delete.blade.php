<x-layout>
    <x-slot:title>Eliminar Producto</x-slot:title>

    <div class="container py-4">
        <h2 class="mb-4">Confirmar Eliminación</h2>
        
        <div class="border p-4 rounded">
            <p class="fs-5">¿Estás seguro de eliminar <strong>"{{ $producto->titulo }}"</strong>?</p>
            <p class="text-muted">Esta acción no se puede deshacer.</p>
            
            <form action="{{ route('productos.destroy', $producto->productos_id) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-danger">Eliminar Definitivamente</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>