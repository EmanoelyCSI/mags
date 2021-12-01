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

        // Posto_id 1 Bomba_id 1 Bico_1
        Leitura::create([
            'bico_id'     => '1',
            'turno_id'    => '1',
            'leitura'    => '931730,00',
        ]);

        Leitura::create([
            'bico_id'     => '1',
            'turno_id'    => '2',
            'leitura'    => '931595,00',
        ]);

        Leitura::create([
            'bico_id'     => '1',
            'turno_id'    => '3',
            'leitura'    => '931730,00',
        ]);

        // Posto_id 1 Bomba_id 1 Bico_2
        Leitura::create([
            'bico_id'     => '2',
            'turno_id'    => '1',
            'leitura'     => '931859,00',
        ]);

        Leitura::create([
            'bico_id'     => '2',
            'turno_id'    => '2',
            'leitura'     => '189901,00',
        ]);

        Leitura::create([
            'bico_id'     => '2',
            'turno_id'    => '3',
            'leitura'     => '165360,00',
        ]);

        // Posto_id 1 Bomba_id 1 Bico_3
        Leitura::create([
            'bico_id'     => '3',
            'turno_id'    => '1',
            'leitura'     => '998261,00',
        ]);

        Leitura::create([
            'bico_id'     => '3',
            'turno_id'    => '2',
            'leitura'     => '933585,00',
        ]);

        Leitura::create([
            'bico_id'     => '3',
            'turno_id'    => '3',
            'leitura'     => '190826,00',
        ]);

        // Posto_id 1 Bomba_id 1 Bico_4
        Leitura::create([
            'bico_id'     => '4',
            'turno_id'    => '1',
            'leitura'     => '998865,00',
        ]);

        Leitura::create([
            'bico_id'     => '4',
            'turno_id'    => '2',
            'leitura'     => '191449,00',
        ]);

        Leitura::create([
            'bico_id'     => '4',
            'turno_id'    => '3',
            'leitura'     => '936195,00',
        ]);


        
        // Posto_id 1 Bomba_id 2 Bico_5
        Leitura::create([
            'bico_id'     => '5',
            'turno_id'    => '1',
            'leitura'    => '170310,00',
        ]);

        Leitura::create([
            'bico_id'     => '5',
            'turno_id'    => '2',
            'leitura'    => '172447,00',
        ]);

        Leitura::create([
            'bico_id'     => '5',
            'turno_id'    => '3',
            'leitura'    => '102177,00',
        ]);

        // Posto_id 1 Bomba_id 2 Bico_6
        Leitura::create([
            'bico_id'     => '6',
            'turno_id'    => '1',
            'leitura'     => '931859,00',
        ]);

        Leitura::create([
            'bico_id'     => '6',
            'turno_id'    => '2',
            'leitura'     => '189901,00',
        ]);

        Leitura::create([
            'bico_id'     => '6',
            'turno_id'    => '3',
            'leitura'     => '165360,00',
        ]);

        // Posto_id 1 Bomba_id 2 Bico_7
        Leitura::create([
            'bico_id'     => '7',
            'turno_id'    => '1',
            'leitura'     => '998261,00',
        ]);

        Leitura::create([
            'bico_id'     => '7',
            'turno_id'    => '2',
            'leitura'     => '933585,00',
        ]);

        Leitura::create([
            'bico_id'     => '7',
            'turno_id'    => '3',
            'leitura'     => '190826,00',
        ]);

        // Posto_id 2 Bomba_id 3 Bico_9
        Leitura::create([
            'bico_id'     => '9',
            'turno_id'    => '4',
            'leitura'     => '191971,00',
        ]);

        Leitura::create([
            'bico_id'     => '9',
            'turno_id'    => '5',
            'leitura'     => '936195,00',
        ]);

        Leitura::create([
            'bico_id'     => '9',
            'turno_id'    => '6',
            'leitura'     => '173934,00',
        ]);

        // Posto_id 2 Bomba_id 3 Bico_10
        Leitura::create([
            'bico_id'     => '10',
            'turno_id'    => '4',
            'leitura'     => '998865,00',
        ]);

        Leitura::create([
            'bico_id'     => '10',
            'turno_id'    => '5',
            'leitura'     => '173934,00',
        ]);

        Leitura::create([
            'bico_id'     => '10',
            'turno_id'    => '6',
            'leitura'     => '935951,00',
        ]);


        // Posto_id 2 Bomba_id 4 Bico_11
        Leitura::create([
            'bico_id'     => '11',
            'turno_id'    => '4',
            'leitura'     => '998865,00',
        ]);

        Leitura::create([
            'bico_id'     => '11',
            'turno_id'    => '5',
            'leitura'     => '191449,00',
        ]);

        Leitura::create([
            'bico_id'     => '11',
            'turno_id'    => '6',
            'leitura'     => '936195,00',
        ]);

        // Posto_id 2 Bomba_id 4 Bico_12
        Leitura::create([
            'bico_id'     => '12',
            'turno_id'    => '4',
            'leitura'     => '998865,00',
        ]);

        Leitura::create([
            'bico_id'     => '12',
            'turno_id'    => '5',
            'leitura'     => '191449,00',
        ]);

        Leitura::create([
            'bico_id'     => '12',
            'turno_id'    => '6',
            'leitura'     => '936195,00',
        ]);

        // Posto_id 2 Bomba_id 5 Bico_13
        Leitura::create([
            'bico_id'     => '13',
            'turno_id'    => '4',
            'leitura'     => '998865,00',
        ]);

        Leitura::create([
            'bico_id'     => '13',
            'turno_id'    => '5',
            'leitura'     => '191449,00',
        ]);

        Leitura::create([
            'bico_id'     => '13',
            'turno_id'    => '6',
            'leitura'     => '936195,00',
        ]);

           // Posto_id 2 Bomba_id 5 Bico_14
           Leitura::create([
            'bico_id'     => '14',
            'turno_id'    => '4',
            'leitura'     => '938306,00',
        ]);

        Leitura::create([
            'bico_id'     => '14',
            'turno_id'    => '5',
            'leitura'     => '193081,00',
        ]);

        Leitura::create([
            'bico_id'     => '14',
            'turno_id'    => '6',
            'leitura'     => '940186,00',
        ]);


    }
}
