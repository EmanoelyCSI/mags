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
        Posto::create([
            'cnpj'        => '07.739.067/0001-91',
            'name'        => 'Shell Estácio',
            'email'       => 'shell.estacio-contato@gmail.com',
            'cell'        => '2198645-8261',
            'tel'         => '212546-8965',
            'address'     => 'R. Estácio de Sá, 87 - Estácio, Rio de Janeiro - RJ, 20211-270',
            'contrato_id' => '1',
            'gerente_id'  => '5',
            'quantidade'   => '100000',
        ]);

        Posto::create([
            'cnpj'          => '05.418.078/0001-92',
            'name'          => 'Ipiranga Humaitá',
            'email'         => 'ipiranga_humaita_contato@gmail.com',
            'cell'          => '2198745-8272',
            'tel'           => '212545-8875',
            'address'       => 'R. Humaitá,136 - Humaitá Rio de Janeiro - RJ 22261-004',
            'contrato_id'   => '2',
            'gerente_id'    => '6',
            'quantidade'     => '200000',
        ]);

        Posto::create([
            'cnpj'          => '06.428.058/0001-96',
            'name'          => 'Posto Planeta Saturno',
            'email'         => 'posto.planeta_saturno@gmail.com',
            'cell'          => '2198645-8276',
            'tel'           => '212565-8876',
            'address'       => 'R. Santa Clara - Copacabana, Rio de Janeiro - RJ, 22041-012',
            'contrato_id'   => '3',
            'gerente_id'    => '11',
            'quantidade'     => '0000',
        ]);

        Posto::create([
            'cnpj'          => '03.438.038/0001-93',
            'name'          => 'Posto Petrobras',
            'email'         => 'posto.petrobras_lagoa@gmail.com',
            'cell'          => '2193745-8373',
            'tel'           => '212535-8873',
            'address'       => 'Av. Borges de Medeiros, S/N - Lagoa, Rio de Janeiro - RJ, 22470-001',
            'contrato_id'   => '4',
            'gerente_id'    => '12',
            'quantidade'     => '0000',
        ]);

        Posto::create([
            'cnpj'          => '07.478.077/0001-97',
            'name'          => 'BR Petrobras',
            'email'         => 'posto.br_petrobras@gmail.com',
            'cell'          => '2197745-8277',
            'tel'           => '212575-8877',
            'address'       => 'Tv. Dr. Araújo, 99 - Praca da Bandeira, Rio de Janeiro - RJ, 20270-070',
            'contrato_id'   => '5',
            'gerente_id'    => '13',
            'quantidade'     => '0000',
        ]);

        Posto::create([
            'cnpj'          => '01.411.071/0001-91',
            'name'          => 'Posto Bandeira Branca',
            'email'         => 'posto_bandeira-branca@gmail.com',
            'cell'          => '219815-8271',
            'tel'           => '212515-8871',
            'address'       => 'R. Itapiru, 484 - Catumbi, Rio de Janeiro - RJ, 20000-000',
            'contrato_id'   => '6',
            'gerente_id'    => '14',
            'quantidade'     => '0000',
        ]);
    }
}
