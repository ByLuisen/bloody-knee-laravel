<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Boxing videos (modality_id = 1)
        for ($i = 1; $i <= 10; $i++) {
            $type_id = ($i % 4) + 1; // Generates a cyclic type value between 1 and 4
            $isExclusive = (bool) rand(0, 1); // Randomly set exclusive to true or false
            Video::create([
                'type_id' => (string) $type_id,
                'modality_id' => '1',
                'title' => "Entrenamiento de boxeo #{$i}",
                'coach' => 'Entrenador Principal',
                'description' => '🥊 ¡Entrenamiento de boxeo enfocado en técnicas y movimientos para mejorar tu golpeo y defensa! ¡Sigue el ritmo y siente cómo mejora tu técnica! 💥 #Boxeo #Entrenamiento #Técnica',
                'url' => 'https://player.vimeo.com/video/942268982?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479',
                'visits' => '0',
                'comments'=>'0',
                'likes' => '0',
                'dislikes' => '0',
                'duration' => '12:00',
                'exclusive' => $isExclusive, // Set exclusive attribute randomly
            ]);
        }

        // Muay Thai videos (modality_id = 2)
        for ($i = 1; $i <= 10; $i++) {
            $type_id = ($i % 4) + 1; // Generates a cyclic type value between 1 and 4
            $isExclusive = (bool) rand(0, 1); // Randomly set exclusive to true or false
            Video::create([
                'type_id' => (string) $type_id,
                'modality_id' => '2',
                'title' => "Entrenamiento de thai #{$i}",
                'coach' => 'Entrenador Principal',
                'description' => '🥊 ¡Entrenamiento de thai que combina movimientos tradicionales con técnicas modernas! ¡Mejora tu flexibilidad, fuerza y resistencia con esta rutina! 🥊 #Thai #Entrenamiento #Flexibilidad',
                'url' => 'https://player.vimeo.com/video/942268879?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479',
                'visits' => '0',
                'comments'=>'0',
                'likes' => '0',
                'dislikes' => '0',
                'duration' => '13:00',
                'exclusive' => $isExclusive, // Set exclusive attribute randomly
            ]);
        }

        // Videos de fitness (modality_id = 3)
        for ($i = 1; $i <= 10; $i++) {
            $type_id = ($i % 4) + 1;// Generates a cyclic type value between 1 and 4
            $isExclusive = (bool) rand(0, 1);// Randomly set exclusive to true or false
            Video::create([
                'type_id' => (string) $type_id,
                'modality_id' => '3',
                'title' => "Entrenamiento de fitness #{$i}",
                'coach' => 'Entrenador Principal',
                'description' => '🥊 ¡Entrenamiento de fitness que combina ejercicios aeróbicos con ejercicios de fuerza! ¡Quema calorías, fortalece tu cuerpo y mejora tu condición física con esta rutina! 💪 #Fitness #Entrenamiento #Salud',
                'url' => 'https://player.vimeo.com/video/942272495?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479',
                'visits' => '0',
                'comments'=>'0',
                'likes' => '0',
                'dislikes' => '0',
                'duration' => '14:00',
                'exclusive' => $isExclusive, // Set exclusive attribute randomly
            ]);
        }
    }
}
