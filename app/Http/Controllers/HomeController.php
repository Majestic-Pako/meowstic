<?php

namespace App\Http\Controllers;

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
        public function list(){
        return view('list');
    }
}
