<x-layout>
<x-slot:title> Blog </x-slot:title>
    <h1>Seccion de Blogs</h1>
<div class="alert alert-info mt-4">
    <h4 class="alert-heading">🌾 ¡Bienvenido al Blog de Stardew Valley!</h4>
    <p>Descubrí guías prácticas, reseñas reflexivas y consejos para que tu experiencia en el valle sea inolvidable. Ya seas nuevo en la granja o un veterano del pueblo Pelícano, acá vas a encontrar contenido hecho con dedicación para vos.</p>
    <hr>
    <p class="mb-0">🧺 A continuación, explorá esta publicación escrita por nuestro equipo</p>
</div>
<div class="container">
    <h2>Listado de Blogs</h2>
    @if(session('feedback.message'))
        <div class="alert alert-success">
            {!! session('feedback.message') !!}
        </div>
    @endif

    @auth
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">+ Publicar nuevo blog</a>
        @endif
    @endauth
    @if($blogs->isEmpty())
        <p>No hay blogs publicados aún.</p>
    @else
        <div class="list-group">
            @foreach($blogs as $blog)
                <div class="list-group-item mb-3">
                    <h4>{{ $blog->titulo }}</h4> 
                    <p><strong>Autor:</strong> {{ $blog->autor }}</p>
                    <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($blog->fecha)->format('d/m/Y') }}</p>
                    <p><strong>Categoría:</strong> {{ ucfirst($blog->categoria) }}</p>
                    <p><strong>Sinopsis:</strong> {{ $blog->synopsis ?? 'Sin sinopsis' }}</p>
                    <p><strong>Articulo:</strong>Ver en mas informacion</p>

                    <a href="{{ route('blogs.view', $blog->blogs_id) }}" class="btn btn-outline-info btn-sm">Ver</a>
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('blogs.edit', $blog->blogs_id) }}" class="btn btn-outline-warning btn-sm" >Editar</a>
                            <a href="{{ route('blogs.delete', $blog->blogs_id) }}" class="btn btn-outline-danger btn-sm">Eliminar</a>
                        @endif
                    @endauth
                </div>
            @endforeach
        </div>
    @endif
</div>

</x-layout>