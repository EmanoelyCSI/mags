<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bomba;

class BombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bomba::create([
            'name'        => 'Bomba A1',
            'modelo'      => 'Prime PMD ',
            'posto_id'    => '1',
        ]);

        Bomba::create([
            'name'        => 'Bomba B2',
            'modelo'      => 'Prime PMD ',
            'posto_id'    => '1',
        ]);

        Bomba::create([
            'name'        => 'Bomba A',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '2',
        ]);

        Bomba::create([
            'name'        => 'Bomba B',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '2',
        ]);

        Bomba::create([
            'name'        => 'Bomba C',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '2',
        ]);

        Bomba::create([
            'name'        => 'Bomba A',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '3',
        ]);

        Bomba::create([
            'name'        => 'Bomba B',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '3',
        ]);

        Bomba::create([
            'name'        => 'Bomba A',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '4',
        ]);

        Bomba::create([
            'name'        => 'Bomba B',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '4',
        ]);

        Bomba::create([
            'name'        => 'Bomba C',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '4',
        ]);

        Bomba::create([
            'name'        => 'Bomba D',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '4',
        ]);

        Bomba::create([
            'name'        => 'Bomba A',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '5',
        ]);
        
        Bomba::create([
            'name'        => 'Bomba B',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '5',
        ]);
        
        Bomba::create([
            'name'        => 'Bomba C',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '5',
        ]);

        Bomba::create([
            'name'        => 'Bomba A',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '6',
        ]);

        Bomba::create([
            'name'        => 'Bomba B',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '6',
        ]);

    }
}
