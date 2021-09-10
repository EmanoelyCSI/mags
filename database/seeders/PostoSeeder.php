<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Posto;

class PostoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Posto::create([
            'cnpj'        => '07.739.067/0001-91',
            'name'        => 'Shell Estácio',
            'email'       => ' shell.estacio-contato@gmail.com',
            'cell'        => '2198645-8261',
            'tel'         => '212546-8965',
            'address'     => 'R. Estácio de Sá, 87 - Estácio, Rio de Janeiro - RJ, 20211-270',
            'bomba'       => '4',
            'bico'        => '2',
            'turno'       => '4',
            'cicloTurno'  => '6 horas',
            'contrato_id' => '1',
        ]);

        Posto::create([
            'cnpj'          => '05.418.078/0001-92',
            'name'          => 'Ipiranga Humaitá',
            'email'         => 'ipiranga_humaita_contato@gmail.com',
            'cell'          => '2198745-8272',
            'tel'           => '212545-8875',
            'address'       => 'R. Humaitá,136 - Humaitá Rio de Janeiro - RJ 22261-004',
            'bomba'         => '2',
            'bico'          => '2',
            'turno'         => '3',
            'cicloTurno'    => '8 horas',
            'contrato_id'   => '1',
        ]);
    }
}
