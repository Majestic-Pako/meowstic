<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])
    ->name('index');

Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blogs.index');

Route::get('/producto', [\App\Http\Controllers\HomeController::class, 'producto'])
    ->name('producto');

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

Route::get('auth/form', [\App\Http\Controllers\AuthController::class, 'showForm'])
    ->name('auth.form');

Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate');

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

Route::post('registrarse', [\App\Http\Controllers\AuthController::class, 'store'])
    ->name('auth.store');

Route::get('perfil', [\App\Http\Controllers\HomeController::class,'perfil'])
    ->name('perfil');

Route::get('list', [\App\Http\Controllers\HomeController::class,'list'])
    ->name('list');
