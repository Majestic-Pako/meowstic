<x-layout>
    <x-slot:title> iniciar Sesion / Registro </x-slot:title>
    <div class="auth-page-container">
        <!-- Ventana de Login -->
        <div class="auth-form-box {{ $showRegister ?? false ? 'auth-hidden' : '' }}" id="authLoginForm">
            <h1 class="auth-form-title">Iniciar Sesión</h1>
            <form action="{{ route('auth.authenticate') }}" method="POST" class="auth-form">
                @csrf
                <div class="auth-input-group">
                    <label for="authEmail" class="form-label">Email</label>
                    <input type="email" id="authEmail" name="email" class="auth-form-control">
                </div>
                <div class="auth-input-group">
                    <label for="authPassword" class="form-label">Contraseña</label>
                    <input type="password" id="authPassword" name="password" class="auth-form-control">
                </div>
                <button type="submit" class="auth-btn auth-btn-primary">Ingresar</button>
            </form>
            <a href="{{ route('auth.form', ['show_register' => 'true']) }}" class="auth-switch-link">¿No tienes cuenta? Regístrate</a>
        </div>
        <!-- Ventana de Registro -->
        <div class="auth-form-box {{ $showRegister ?? false ? '' : 'auth-hidden' }}" id="authRegisterForm">
            <h1 class="auth-form-title">Registro</h1>
            <form action="{{ route('auth.store') }}" method="POST" class="auth-form">
                @csrf
                <div class="auth-input-group">
                    <label for="authName" class="form-label">Nombre</label>
                    <input type="text" id="authName" name="name" class="auth-form-control">
                </div>
                <div class="input-box mb-3">
                    <label for="authRegEmail" class="form-label">Email</label>
                    <input type="email" id="authRegEmail" name="email" class="auth-form-control">
                </div>
                <div class="input-box mb-3">
                    <label for="authRegPassword" class="form-label">Contraseña</label>
                    <input type="password" id="authRegPassword" name="password" class="auth-form-control">
                </div>
                <button type="submit" class="auth-btn auth-btn-success">Registrarse</button>
            </form>
            <a href="{{ route('auth.form', ['show_register' => 'false']) }}" class="auth-switch-link">¿Ya tienes cuenta? Inicia Sesión</a>
        </div>
    </div>
</x-layout>
