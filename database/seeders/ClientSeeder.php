<?php

namespace Database\Seeders;

use App\Models\Client;
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
        //
        $client = Client::create([
            'tipo_documento' => 1,
            'numero_documento' => '1093887001',
            'nombre' => 'Brayan Rodriguez'
        ]);

        $client = Client::create([
            'tipo_documento' => 2,
            'numero_documento' => '123456789',
            'nombre' => 'Julanito Perez'
        ]);

        $client = Client::create([
            'tipo_documento' => 3,
            'numero_documento' => '987654321',
            'nombre' => 'Julanita Gomez'
        ]);

        $client = Client::create([
            'tipo_documento' => 4,
            'numero_documento' => '147258369',
            'nombre' => 'Juan Cardenas'
        ]);
    }
}
