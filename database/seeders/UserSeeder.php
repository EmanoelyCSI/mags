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

        User::create([
            'name'      =>'Marcela da Cunha dos Santos',
            'email'     =>'marcela_santos@gmail.com',
            'profile'   =>'proprietario',
            'cell'      =>'21996749096',
            'tel'       =>'2125654056',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Antônio Pereira Cardoso',
            'email'     =>'antonio_pereira@gmail.com',
            'profile'   =>'proprietario',
            'cell'      =>'21993749093',
            'tel'       =>'2125354053',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Célia Regina Campos',
            'email'     =>'celia_campos@gmail.com',
            'profile'   =>'proprietario',
            'cell'      =>'21997749097',
            'tel'       =>'2125754057',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Alex Ribeio Gomes',
            'email'     =>'alex_gomes@gmail.com',
            'profile'   =>'proprietario',
            'cell'      =>'21991749091',
            'tel'       =>'2125154051',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Larissa Almeida',
            'email'     =>'lari.almeida@gmail.com',
            'profile'   =>'gerente',
            'cell'      =>'21990749092',
            'tel'       =>'2125054052',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Renata Ribeiro Dias',
            'email'     =>'renata_dias@gmail.com',
            'profile'   =>'gerente',
            'cell'      =>'21994449090',
            'tel'       =>'2125444050',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'César Macedo Lira',
            'email'     =>'cesar.lira@gmail.com',
            'profile'   =>'gerente',
            'cell'      =>'21992349093',
            'tel'       =>'2125234053',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            'name'      =>'Leandro Júnior Garcias',
            'email'     =>'leo_garcias@gmail.com',
            'profile'   =>'gerente',
            'cell'      =>'21998849099',
            'tel'       =>'2125884059',
            'password'  => Hash::make('123456'),
        ]);
    }
}
