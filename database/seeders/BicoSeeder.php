<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bico;


class BicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bico::create([
            'name'        => 'Bico 1',
            // 'bomba_id'    => '1',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            // 'bomba_id'    => '2',
        ]);

        Bico::create([
            'name'        => 'Bico 3',
            // 'bomba_id'    => '3',
        ]);
    }
}
