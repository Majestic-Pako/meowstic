<x-layout>

<div class="container mt-5">
    <article class="bg-white p-4 rounded shadow-sm">
        <h1 class="mb-3">{{ $blog->titulo }}</h1>

        <div class="text-muted mb-2">
            <small>
                Escrito por <strong>{{ $blog->autor }}</strong> |
                {{ \Carbon\Carbon::parse($blog->fecha)->format('d/m/Y') }} |
                Categoría: <span class="badge bg-info text-dark">{{ ucfirst($blog->categoria) }}</span>
            </small>

        </div>

        <hr>

        <section class="mt-4" style="line-height: 1.7;">
            {!! nl2br(e($blog->synopsis)) !!}
        </section >

        <section class="mt-4" style="line-height: 1.7;">
            {!! nl2br(e($blog->informacion)) !!}
        </section>
        <div class="mt-4">
            <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary">← Volver al blog</a>
        </div>
    </article>
</div>

</x-layout>