<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'titulo' => 'Test',
            'descripcion' => 'version de prueba para ver el diseño',
            'categoria' =>'stickers',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
