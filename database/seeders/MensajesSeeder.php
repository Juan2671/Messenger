<?php

namespace Database\Seeders;

use App\Models\Mensajes;
use Illuminate\Database\Seeder;

class MensajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensajes::create([
            'from_id'=>1,
            'to_id'=>2,
            'contenido'=>'hola como estas',
        ]);

        Mensajes::create([
            'from_id'=>2,
            'to_id'=>1,
            'contenido'=>'Bine gracias',
        ]);
    }
}
