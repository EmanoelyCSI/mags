<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ContratoSeeder;
use Database\Seeders\PostoSeeder;
use Database\Seeders\LeituraSeeder;
use Database\Seeders\BombaSeeder;
use Database\Seeders\BicoSeeder;
use Database\Seeders\TurnoSeeder;





class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ContratoSeeder::class,
            PostoSeeder::class,
            TurnoSeeder::class,
            LeituraSeeder::class,
            BombaSeeder::class,
            BicoSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
