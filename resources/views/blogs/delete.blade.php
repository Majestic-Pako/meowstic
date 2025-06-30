<x-layout>

    <x-slot:title>Confirmación para eliminar {{ $blog->titulo }}</x-slot:title>

    <div class="container mt-5">
        <h1 class="mb-3 text-danger">¿Estás seguro de eliminar "{{ $blog->titulo }}"?</h1>
        <p class="mb-3">Estás a punto de <strong>eliminar</strong> el artículo <strong>{{ $blog->titulo }}</strong> escrito por <strong>{{ $blog->autor }}</strong>.</p>
        <p>¿Querés proceder con la eliminación?</p>

        <form
            action="{{ route('blogs.destroy', ['id' => $blog->blogs_id]) }}"
            method="POST"
            class="mb-3"
        >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Sí, eliminar "{{ $blog->titulo }}"</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>

        <hr class="mb-3">

        <h2>Sinopsis</h2>
        <p>{{ $blog->synopsis }}</p>

        <h2 class="mt-4">Información</h2>
        <div>{!! nl2br(e($blog->informacion)) !!}</div>

        <dl class="mt-4">
            <dt>Fecha</dt>
            <dd>{{ \Carbon\Carbon::parse($blog->fecha)->format('d/m/Y') }}</dd>

            <dt>Categoría</dt>
            <dd>{{ ucfirst($blog->categoria) }}</dd>
        </dl>
    </div>

</x-layout>
