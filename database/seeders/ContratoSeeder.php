<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contrato;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contrato::create([
            'cnpj'            => '07.739.067/0001-91',
            'name'            => 'João Pereira dos Santos',
            'proprietario_id' =>  '3',
            'email'           => 'joão_santos.contato@gmail.com',
            'cell'            => '2198645-8261',
            'tel'             => '212546-8965',
            'address'         => 'R. Estácio de Sá, 87 - Estácio, Rio de Janeiro - RJ, 20211-270',
        ]);

        Contrato::create([
            'cnpj'            =>  '05.418.078/0001-92',
            'name'            =>  'Marcos da Silva dos Santos',
            'proprietario_id' =>  '4',
            'email'           =>  'marcos.silva_contato@gmail.com',
            'cell'            =>  '2198745-8272',
            'tel'             =>  '212545-8875',
            'address'         =>  'R. Maia de Lacerda, 36 - Estácio Rio de Janeiro - RJ 20250-001',

        ]);

        Contrato::create([
            'cnpj'            =>  '06.428.058/0001-96',
            'name'            =>  'Marcela da Cunha dos Santos',
            'proprietario_id' =>  '7',
            'email'           =>  'posto.planeta_saturno@gmail.com',
            'cell'            =>  '2198645-8276',
            'tel'             =>  '212565-8876',
            'address'         =>  'R. Santa Clara - Copacabana, Rio de Janeiro - RJ, 22041-012',

        ]);

        Contrato::create([
            'cnpj'            =>  '03.438.038/0001-93',
            'name'            =>  'Antônio Pereira Cardoso',
            'proprietario_id' =>  '8',
            'email'           =>  'posto.petrobras_lagoa@gmail.com',
            'cell'            =>  '2193745-8373',
            'tel'             =>  '212535-8873',
            'address'         =>  'Av. Borges de Medeiros, S/N - Lagoa, Rio de Janeiro - RJ, 22470-001',

        ]);

        Contrato::create([
            'cnpj'            =>  '07.478.077/0001-97',
            'name'            =>  'Célia Regina Campos',
            'proprietario_id' =>  '9',
            'email'           =>  'posto.br_petrobras@gmail.com',
            'cell'            =>  '2197745-8277',
            'tel'             =>  '212575-8877',
            'address'         =>  'Tv. Dr. Araújo, 99 - Praca da Bandeira, Rio de Janeiro - RJ, 20270-070',

        ]);

        Contrato::create([
            'cnpj'            =>  '01.411.071/0001-91',
            'name'            =>  'Alex Ribeio Gomes',
            'proprietario_id' =>  '10',
            'email'           =>  'posto_bandeira-branca@gmail.com',
            'cell'            =>  '219815-8271',
            'tel'             =>  '212515-8871',
            'address'         =>  'R. Itapiru, 484 - Catumbi, Rio de Janeiro - RJ, 20000-000',

        ]);
    }
}
