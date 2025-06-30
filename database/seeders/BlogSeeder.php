<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'titulo' => 'Guía para principiantes en Stardew Valley',
                'autor' => 'Agustín',
                'synopsis' => 'Una guía rápida para comenzar con buen pie tu primera granja en Stardew Valley.',
                'fecha' => '2025-05-01',
                'categoria' => 'guia',
                'informacion' => 'Stardew Valley ofrece una experiencia relajante y rica en actividades. Para empezar bien, enfócate en plantar cultivos de temporada como papas o fresas en primavera. Habla con todos los aldeanos para mejorar tus relaciones. Ahorra madera y piedra para construir el gallinero lo antes posible. Riega tus cultivos a diario y, si puedes, invierte en aspersores. Explora las minas en días lluviosos para obtener minerales y sube tus habilidades poco a poco. ¡No olvides revisar el canal de TV cada mañana!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo' => 'Stardew Valley: una joya indie que enamora',
                'autor' => 'Antonio',
                'synopsis' => 'Opinión personal sobre lo que hace tan especial a Stardew Valley.',
                'fecha' => '2025-05-02',
                'categoria' => 'reseña',
                'informacion' => 'Stardew Valley es un juego que destaca por su encanto visual y su profunda jugabilidad. Con gráficos pixel art y música relajante, logra atrapar tanto a jugadores casuales como a fans del género de simulación. El ciclo día a día y las actividades como cultivar, pescar o relacionarse con los aldeanos hacen que cada partida sea única. Su creador, ConcernedApe, logró construir un universo lleno de vida y emociones. Una experiencia gratificante, perfecta para relajarse o perderse por horas.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo' => 'Cómo maximizar tus ganancias en el primer año',
                'autor' => 'Thomas',
                'synopsis' => 'Consejos para hacer oro de forma eficiente en tus primeros meses.',
                'fecha' => '2025-05-05',
                'categoria' => 'guia',
                'informacion' => 'La clave para ganar oro en Stardew Valley es planificar cada estación. En primavera, cultiva fresas y coliflor; en verano, melones y arándanos; y en otoño, calabazas y arándanos. Aprovechá los días de lluvia para minar y conseguir minerales valiosos. Invertí en animales solo cuando puedas mantenerlos. Automatizá tu granja con aspersores y corrales. Vendé todo lo que no uses y ahorrá para mejorar herramientas. Dormí temprano para conservar energía y nunca descuides el buzón del alcalde.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo' => 'Stardew Valley y el arte de desconectarse',
                'autor' => 'Esteban',
                'synopsis' => 'Cómo este juego se convirtió en un refugio para miles de jugadores.',
                'fecha' => '2025-05-06',
                'categoria' => 'reseña',
                'informacion' => 'En una era de estrés y velocidad, Stardew Valley propone una pausa. No solo es un juego de granjas, sino una experiencia de vida virtual tranquila. Su ritmo pausado y libertad de acción permiten jugar sin presión. Hay una belleza en su simplicidad: cuidar una granja, conocer personajes entrañables, y ver cómo florece tu entorno. Es un recordatorio de que el disfrute puede estar en lo cotidiano. Stardew Valley no solo se juega, se habita. Y cada regreso al valle se siente como volver a casa.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
