<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Estillore',
                'first_name' => 'John Lorrence',
                'middle_name' => 'Jumamoy',
                'address' => 'Cogon, Inabanga, Bohol',
                'birth_date' => '2001-04-13',
                'phone_number' => '09291677661',
                'email' => 'estillorejohnlorrence@gmail.com',
                'initial_deposit' => 50000
            ],
            [
                'last_name' => 'Estillore',
                'first_name' => 'Kent Carlo',
                'middle_name' => 'Jumamoy',
                'address' => 'Cogon, Inabanga, Bohol',
                'birth_date' => '2001-04-13',
                'phone_number' => '09291677661',
                'email' => 'kentcarloestillore@gmail.com',
                'initial_deposit' => 50000
            ],
            [
                'last_name' => 'Estillore',
                'first_name' => 'John Lorrence',
                'middle_name' => 'Jumamoy',
                'address' => 'Cogon, Inabanga, Bohol',
                'birth_date' => '2001-04-13',
                'phone_number' => '09291677661',
                'email' => 'estillorelawrence7@gmail.com',
                'initial_deposit' => 50000
            ],
            [
                'last_name' => 'Estillore',
                'first_name' => 'John Lorrence',
                'middle_name' => 'Jumamoy',
                'address' => 'Cogon, Inabanga, Bohol',
                'birth_date' => '2001-04-13',
                'phone_number' => '09291677661',
                'email' => 'estillorelawrence7@yahoo.com',
                'initial_deposit' => 50000
            ],
            [
                'last_name' => 'Doe',
                'first_name' => 'John',
                'middle_name' => 'Miltoe',
                'address' => ' California, USA',
                'birth_date' => '1967-11-03',
                'phone_number' => '09291677166',
                'email' => 'estillorejohnlorrence@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
