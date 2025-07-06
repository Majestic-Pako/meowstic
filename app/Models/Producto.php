<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'productos_id';

    protected $fillable = ['titulo', 'descripcion','categoria'];
}
