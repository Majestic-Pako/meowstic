<x-layout>
    <x-slot:title>Publicar Producto</x-slot:title>

    <div class="container py-4">
        <h2 class="mb-4">Nuevo Producto</h2>
        
        <form action="{{ route('productos.store') }}" method="POST" class="border p-4 rounded">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required maxlength="100">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3" required maxlength="150"></textarea>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Categoría</label>
                <select name="categoria" class="form-select" required>
                    <option value="peluches">Peluches</option>
                    <option value="stickers">Stickers</option>
                    <option value="mods">Mods</option>
                </select>
            </div>
            
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-success">Publicar</button>
            </div>
        </form>
    </div>
</x-layout>