<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name'      =>'andreneves',
            'email'     =>'andr@andr.com.br',
            'profile'   =>'admin',
            'cell'      =>'21927453869',
            'tel'       =>'2184204840',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'emanoely',
            'email'     =>'manu@manu.com.br',
            'profile'   =>'admin',
            'cell'      =>'21927423860',
            'tel'       =>'2199204840',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'João Pereira dos Santos',
            'email'     =>'joaoperira@gmail.com',
            'profile'   =>'proprietario',
            'cell'      =>'21927453869',
            'tel'       =>'2184204840',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Joaquim Ribeiro da Silva',
            'email'     =>'joaquimrs@gmail.com',
            'profile'   =>'proprietario',
            'cell'      =>'2199742047',
            'tel'       =>'2181937183',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Maria Carolina Moreira dos Santoas',
            'email'     =>'maria_c@gmail.com',
            'profile'   =>'gerente',
            'cell'      =>'21992747592',
            'tel'       =>'2125374056',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Ana Laura Moreira dos Santoas',
            'email'     =>'ana_l@gmail.com',
            'profile'   =>'gerente',
            'cell'      =>'21992749098',
            'tel'       =>'2125554055',
            'password'  => Hash::make('123456'),
        ]);
    }
}
