<x-layout>

<div class="container mt-5">
    <h2>Editar blog</h2>

    <form action="{{ route('blogs.update', $blog->blogs_id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $blog->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" value="{{ $blog->autor }}" required>
        </div>

        <div class="mb-3">
            <label for="synopsis" class="form-label">Sinopsis</label>
            <textarea name="synopsis" id="synopsis" class="form-control">{{ $blog->synopsis }}</textarea>
        </div>

        <div class="mb-3">
            <label for="informacion" class="form-label">Informacion</label>
            <textarea name="informacion" id="informacion" class="form-control">{{ $blog->informacion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $blog->fecha }}" required>
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select name="categoria" id="categoria" class="form-select" required>
                <option value="guia" {{ $blog->categoria == 'guia' ? 'selected' : '' }}>Guía</option>
                <option value="reseña" {{ $blog->categoria == 'reseña' ? 'selected' : '' }}>Reseña</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar cambios</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</x-layout>