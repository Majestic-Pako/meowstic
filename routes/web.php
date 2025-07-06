<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])
    ->name('index');

Route::get('perfil', [\App\Http\Controllers\HomeController::class,'perfil'])
    ->name('perfil');

Route::get('home', [\App\Http\Controllers\HomeController::class,'home'])
    ->name('home')
    ->middleware('auth');

/* Inicio de Rutas de la carpeta Blogs */ 
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blogs.index');

Route::get('blogs/{id}', [\App\Http\Controllers\BlogController::class, 'view'])
    ->name('blogs.view')
    ->whereNumber('id');

Route::get('blogs/publicar', [\App\Http\Controllers\BlogController::class, 'create'])
    ->name('blogs.create')
    ->middleware('auth');

Route::post('blogs/publicar', [\App\Http\Controllers\BlogController::class, 'store'])
    ->name('blogs.store')
    ->middleware('auth');

Route::get('blogs/{id}/eliminar', [\App\Http\Controllers\BlogController::class, 'delete'])
    ->name('blogs.delete')
    ->whereNumber('id')
    ->middleware('auth');

Route::delete('blogs/{id}/eliminar', [\App\Http\Controllers\BlogController::class, 'destroy'])
    ->name('blogs.destroy')
    ->whereNumber('id')
    ->middleware('auth');

Route::get('blogs/editar/{id}', [\App\Http\Controllers\BlogController::class, 'edit'])
    ->name('blogs.edit')
    ->whereNumber('id')
    ->middleware('auth');

Route::put('blogs/editar/{id}', [\App\Http\Controllers\BlogController::class, 'update'])
    ->name('blogs.update')
    ->whereNumber('id')
    ->middleware('auth');
/* Fin de Rutas de la Carpeta Blogs */

/* Inicio de Rutas de la carpeta Auth */ 
Route::get('auth/form', [\App\Http\Controllers\AuthController::class, 'showForm'])
    ->name('auth.form');

Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate');

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

Route::post('registrarse', [\App\Http\Controllers\AuthController::class, 'store'])
    ->name('auth.store');
/* Fin de Rutas de la carpeta Auth */ 

/* Inicio de Rutas de la carpeta de Productos */
Route::get('productos', [\App\Http\Controllers\ProductosController::class, 'index'])
    ->name('productos.index');

    Route::get('productos/publicar', [\App\Http\Controllers\ProductosController::class, 'create'])
    ->name('productos.create')
    ->middleware('auth');

Route::post('productos/publicar', [\App\Http\Controllers\ProductosController::class, 'store'])
    ->name('productos.store')
    ->middleware('auth');  // Descomenta si quieres proteger esta ruta

Route::get('productos/{id}/editar', [\App\Http\Controllers\ProductosController::class, 'edit'])
    ->name('productos.edit')
    ->whereNumber('id')
    ->middleware('auth');  // Descomenta si quieres proteger esta ruta

Route::put('productos/{id}/editar', [\App\Http\Controllers\ProductosController::class, 'update'])
    ->name('productos.update')
    ->whereNumber('id')
    ->middleware('auth');  // Descomenta si quieres proteger esta ruta

Route::get('productos/{id}/eliminar', [\App\Http\Controllers\ProductosController::class, 'delete'])
    ->name('productos.delete')
    ->whereNumber('id')
    ->middleware('auth');  // Descomenta si quieres proteger esta ruta

Route::delete('productos/{id}/eliminar', [\App\Http\Controllers\ProductosController::class, 'destroy'])
    ->name('productos.destroy')
    ->whereNumber('id')
    ->middleware('auth');
