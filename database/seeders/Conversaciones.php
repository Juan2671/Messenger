<?php

namespace Database\Seeders;

use App\Models\Conversacion;
use Illuminate\Database\Seeder;

class Conversaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversacion::create([
            'user_id' => 1,
            'contacto_id' =>2,
            'ultimo_mensages' => null,
            'hora_ultimo_mensage' => null,
        ]);

        Conversacion::create([
            'user_id' => 2,
            'contacto_id' =>1,
            'ultimo_mensages' => null,
            'hora_ultimo_mensage' => null,
        ]);
    }
}
