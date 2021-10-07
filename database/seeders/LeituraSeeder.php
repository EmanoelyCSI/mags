<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leitura;


class LeituraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leitura::create([
            'bomba_id'    => '1',
            'bico_id'     => '1',
            'turno_id'    => '1',
            'leitura'    => '131416',
        ]);

        Leitura::create([
            'bomba_id'    => '2',
            'bico_id'     => '2',
            'turno_id'    => '2',
            'leitura'    => '131416',
        ]);

        Leitura::create([
            'bomba_id'    => '3',
            'bico_id'     => '3',
            'turno_id'    => '3',
            'leitura'    => '131416',
        ]);
    }
}
