<x-layout>
    <x-slot:title>Editar Producto</x-slot:title>

    <div class="container py-4">
        <h2 class="mb-4">Editar Producto</h2>
        
        <form action="{{ route('productos.update', $producto->productos_id) }}" method="POST" class="border p-4 rounded">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $producto->titulo) }}" required maxlength="100">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3" required maxlength="150">{{ old('descripcion', $producto->descripcion) }}</textarea>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Categoría</label>
                <select name="categoria" class="form-select" required>
                    @foreach(['peluches', 'stickers', 'mods'] as $categoria)
                        <option value="{{ $categoria }}" {{ $producto->categoria == $categoria ? 'selected' : '' }}>
                            {{ ucfirst($categoria) }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</x-layout>