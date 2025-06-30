<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.form');
    }

    public function authenticate(Request $request)
    {
        //TODO: Validar

        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()
                ->intended(route('blogs.index'))
                ->with('feedback.message', 'Sesión iniciada con éxito, ¡Bienvenido de nuevo!');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('feedback.message', 'las credenciales son incorrectas');

    }

public function logout(Request $request)
{
        //dd($request->all()); //Metodo pa depurar
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.form') 
            ->with('feedback.message', 'Sesión cerrada correctamente');
    }

    public function register()
    {
        return view('auth.form'); 
    }

public function store(Request $request)
{
    // Validación simplificada (sin confirmación de contraseña)
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3', // Sin confirmed
    ]);

    try {
        // Verifica manualmente si el email existe (doble protección)
        if (User::where('email', $request->email)->exists()) {
            return back()
                ->withInput()
                ->with('feedback.error', 'El email ya está registrado');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client', // Asignación directa
        ]);

        Auth::login($user);

        return redirect()
            ->route('blogs.index')
            ->with('feedback.message', '¡Registro exitoso!');

    } catch (\Exception $e) {
        return back()
            ->withInput()
            ->with('feedback.error', 'Error: ' . $e->getMessage());
    }
}

public function showForm(Request $request)
    {
        $showRegister = $request->has('show_register') && $request->show_register === 'true';
        return view('auth.form', ['showRegister' => $showRegister]);
    }
}
