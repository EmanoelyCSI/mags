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
            // 'bomba_id'    => '1',
            // 'bico_id'     => '1',
            // 'turno_id'    => '1',
            'leitura'    => '131416',
        ]);
    }
}
