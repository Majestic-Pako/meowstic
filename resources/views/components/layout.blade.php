<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} ::  Meowstic</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
            <i class="fa-solid fa-cat me-2"></i>
            <span><strong>Meowstic</strong></span>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuHamburguesa">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuHamburguesa">
                <ul class="navbar-nav ms-auto">
                    @auth
                        @if(auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <x-nav-link route="home">Home</x-nav-link>
                        </li>
                        @endif
                        @if(auth()->user()->role === 'client')
                        <li class="nav-item">
                            <x-nav-link route="perfil">Perfil</x-nav-link>
                        </li>
                        @endif
                    @endauth
                    <li class="nav-item">
                        <x-nav-link route="index">Inicio</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link route="blogs.index">Blog</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link route="productos.index">Tienda</x-nav-link>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="post">
                                @csrf
                                <button type="submit" class="nav-link">
                                    {{ auth()->user()->email }}  (Cerrar Sesion)
                                    </button>
                                </form>
                            </li>
                    @else
                    <li class="nav-item">
                        <x-nav-link class="btn btn-login" route="auth.form">Iniciar sesión</x-nav-link>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @if (session()->has('feedback.message'))
            <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">
                {!! session()->get('feedback.message') !!}
            </div>
        @endif
        {{ $slot }}
    </main>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <h2>Meowstic</h2>
            <p>"Cultivando creatividad, un píxel a la vez."</p>
        </div>
    <div class="footer-divider"></div>
        <div class="footer-icons">
            <a href="https://davinci.edu.ar" target="_blank" title="Institución" class="icon icon-inst"><i class="fas fa-university"></i></a>
            <a href="https://github.com/apps/desktop" target="_blank" title="GitHub" class="icon icon-github"><i class="fab fa-github"></i></a>
            <a href="https://www.youtube.com/@midudev" target="_blank" title="YouTube" class="icon icon-yt"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <div class="footer-copy">© 2025 Meowstic. Todos los derechos reservados.</div>
</footer>
    <script src="https://kit.fontawesome.com/1ef2779bde.js" crossorigin="anonymous"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>