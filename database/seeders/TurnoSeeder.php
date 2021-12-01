<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Turno;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Turno::create([
            'name'              => 'Manhã',
            'horario_inicio'    => '06:00',
            'horario_fim'       => '12:00',
            'posto_id'          => '1',
        ]);

        Turno::create([
            'name'              => 'Tarde',
            'horario_inicio'    => '12:00',
            'horario_fim'       => '18:00',
            'posto_id'          => '1',
        ]);

        Turno::create([
            'name'              => 'Noite',
            'horario_inicio'    => '18:00',
            'horario_fim'       => '00:00',
            'posto_id'          => '1',
        ]);


        Turno::create([
            'name'              => 'Manhã',
            'horario_inicio'    => '06:00',
            'horario_fim'       => '12:00',
            'posto_id'          => '2',
        ]);

        Turno::create([
            'name'              => 'Tarde',
            'horario_inicio'    => '12:00',
            'horario_fim'       => '18:00',
            'posto_id'          => '2',
        ]);

        Turno::create([
            'name'              => 'Noite',
            'horario_inicio'    => '18:00',
            'horario_fim'       => '00:00',
            'posto_id'          => '2',
        ]);


        Turno::create([
            'name'              => 'Manhã',
            'horario_inicio'    => '06:00',
            'horario_fim'       => '12:00',
            'posto_id'          => '3',
        ]);

        Turno::create([
            'name'              => 'Tarde',
            'horario_inicio'    => '12:00',
            'horario_fim'       => '18:00',
            'posto_id'          => '3',
        ]);

        Turno::create([
            'name'              => 'Noite',
            'horario_inicio'    => '18:00',
            'horario_fim'       => '00:00',
            'posto_id'          => '3',
        ]);


        Turno::create([
            'name'              => 'Manhã',
            'horario_inicio'    => '06:00',
            'horario_fim'       => '12:00',
            'posto_id'          => '4',
        ]);

        Turno::create([
            'name'              => 'Tarde',
            'horario_inicio'    => '12:00',
            'horario_fim'       => '18:00',
            'posto_id'          => '4',
        ]);

        Turno::create([
            'name'              => 'Noite',
            'horario_inicio'    => '18:00',
            'horario_fim'       => '00:00',
            'posto_id'          => '4',
        ]);

        Turno::create([
            'name'              => 'Madrugada',
            'horario_inicio'    => '00:00',
            'horario_fim'       => '06:00',
            'posto_id'          => '4',
        ]);


        Turno::create([
            'name'              => 'Manhã',
            'horario_inicio'    => '06:00',
            'horario_fim'       => '12:00',
            'posto_id'          => '5',
        ]);

        Turno::create([
            'name'              => 'Tarde',
            'horario_inicio'    => '12:00',
            'horario_fim'       => '18:00',
            'posto_id'          => '5',
        ]);

        Turno::create([
            'name'              => 'Noite',
            'horario_inicio'    => '18:00',
            'horario_fim'       => '00:00',
            'posto_id'          => '5',
        ]);

        
        
        Turno::create([
            'name'              => 'Manhã',
            'horario_inicio'    => '06:00',
            'horario_fim'       => '12:00',
            'posto_id'          => '4',
        ]);

        Turno::create([
            'name'              => 'Tarde',
            'horario_inicio'    => '12:00',
            'horario_fim'       => '18:00',
            'posto_id'          => '6',
        ]);

        Turno::create([
            'name'              => 'Noite',
            'horario_inicio'    => '18:00',
            'horario_fim'       => '00:00',
            'posto_id'          => '6',
        ]);

        Turno::create([
            'name'              => 'Madrugada',
            'horario_inicio'    => '00:00',
            'horario_fim'       => '06:00',
            'posto_id'          => '6',
        ]);



    }
}
