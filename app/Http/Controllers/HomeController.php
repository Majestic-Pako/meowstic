<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function blog(){
        return view('blogs.index');
    }
    public function producto(){
        return view('producto');
    }
        public function perfil(){
        return view('perfil');
    }
        public function home()
    {
            if (auth()->user()->role === 'admin') {
            $clientes = User::where('role', 'client')
            ->select('id', 'name', 'email', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('home', ['clientes' => $clientes]);
    }

    return view('home'); // Vista normal para clientes
    }
}
