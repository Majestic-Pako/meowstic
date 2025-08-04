<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'productos_id';

    protected $fillable = ['titulo', 'descripcion','categoria'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'producto_user', 'producto_id', 'user_id');
    }
}
