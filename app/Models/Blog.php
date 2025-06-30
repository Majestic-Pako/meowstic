<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $primaryKey = 'blogs_id';

    protected $fillable = ['titulo', 'autor', 'synopsis', 'fecha', 'categoria', 'informacion'];

}
