<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Lee Aplacador',
                'address' => 'Pandan, Tubigon, Bohol',
                'phone' => '09462347919',
                'capitalization' => 1500.00,
                'loan' => 5000.00
            ],

            [
                'name' => 'Rona Mae Estiloore',
                'address' => 'Lutao, Inabanga, Bohol',
                'phone' => '09126543217',
                'capitalization' => 13400.00,
                'loan' => 7000.00
            ],

            [
                'name' => 'Saimon Guadez',
                'address' => 'Cat, Bohol',
                'phone' => '0909543681',
                'capitalization' => 12100.00,
                'loan' => 1000.00
            ],
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }
    
    }
}
