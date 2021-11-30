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
            'name'        => 'Bico A',
            'bomba_id'    => '1',
        ]);

        Bico::create([
            'name'        => 'Bico B',
            'bomba_id'    => '1',
        ]);

        Bico::create([
            'name'        => 'Bico C',
            'bomba_id'    => '1',
        ]);

        Bico::create([
            'name'        => 'Bico D',
            'bomba_id'    => '1',
        ]);

        Bico::create([
            'name'        => 'Bico E',
            'bomba_id'    => '2',
        ]);

        Bico::create([
            'name'        => 'Bico F',
            'bomba_id'    => '2',
        ]);

        Bico::create([
            'name'        => 'Bico G',
            'bomba_id'    => '2',
        ]);

        Bico::create([
            'name'        => 'Bico H',
            'bomba_id'    => '2',
        ]);

        Bico::create([
            'name'        => 'Bico 3',
            'bomba_id'    => '3',
        ]);
    }
}
