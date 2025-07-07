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
        [
            'titulo' => 'Peluche de Junimo Verde',
            'descripcion' => 'Un suave peluche del simpático Junimo verde que cuida el Centro Comunitario.',
            'categoria' => 'peluches',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Peluche de Krobus',
            'descripcion' => 'Representación adorable del misterioso Krobus, ideal para decorar tu rincón oscuro.',
            'categoria' => 'peluches',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Peluche de Vaca Stardew',
            'descripcion' => 'Peluche inspirado en las vacas de la granja, con manchas y campanita incluida.',
            'categoria' => 'peluches',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Peluche de Gato de Abigail',
            'descripcion' => 'Basado en el gato que aparece en la casa de Abigail, con estilo gótico y encantador.',
            'categoria' => 'peluches',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Sticker de Junimos Bailando',
            'descripcion' => 'Stickers de Junimos en distintos colores haciendo su famosa danza mágica.',
            'categoria' => 'stickers',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Sticker de Espantapájaros Raro',
            'descripcion' => 'Ilustración del espantapájaros raro azul. Ideal para notebooks o celulares.',
            'categoria' => 'stickers',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Sticker de Frutas Antiguas',
            'descripcion' => 'Dibujos adorables de frutas antiguas con caritas felices y colores pastel.',
            'categoria' => 'stickers',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Sticker de Herramientas Doradas',
            'descripcion' => 'Set de stickers con hacha, pico y regadera dorada para fans dedicados.',
            'categoria' => 'stickers',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Mod de Recolores de Estaciones',
            'descripcion' => 'Cambia los colores de cada estación para un estilo más vibrante y moderno.',
            'categoria' => 'mods',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Mod de Ropa Moderna',
            'descripcion' => 'Añade ropa casual, urbana y de estilo moderno a tu granjero/a.',
            'categoria' => 'mods',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Mod de Romance con Krobus',
            'descripcion' => 'Habilita el romance y eventos con Krobus para una historia única.',
            'categoria' => 'mods',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Mod de Animales Personalizados',
            'descripcion' => 'Cambia vacas, gallinas y patos por versiones pastel y pixel art kawaii.',
            'categoria' => 'mods',
            'created_at' => now(),
            'updated_at' => now()
        ],
        ]);
    }
}
