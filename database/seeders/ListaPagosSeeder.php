<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ListaPagos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Symfony\Component\VarDumper\Cloner\Data;

class ListaPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 520000,
            'vencimiento' => Carbon::create('2021', '01', '10'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 585000,
            'vencimiento' => Carbon::create('2021', '02', '10'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 328000,
            'vencimiento' => Carbon::create('2021', '02', '20'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 120000,
            'vencimiento' => Carbon::create('2021', '03', '11'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 368000,
            'vencimiento' => Carbon::create('2021', '03', '14'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 1200000,
            'vencimiento' => Carbon::create('2021', '03', '23'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 1,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 980000,
            'vencimiento' => Carbon::create('2021', '03', '27'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 720000,
            'vencimiento' => Carbon::create('2021', '04', '05'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 453000,
            'vencimiento' => Carbon::create('2021', '04', '08'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 486200,
            'vencimiento' => Carbon::create('2021', '04', '12'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 120630,
            'vencimiento' => Carbon::create('2021', '04', '15'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 122000,
            'vencimiento' => Carbon::create('2021', '04', '18'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 932000,
            'vencimiento' => Carbon::create('2021', '04', '19'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 2,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 888000,
            'vencimiento' => Carbon::create('2021', '04', '21'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 453000,
            'vencimiento' => Carbon::create('2021', '05', '18'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 296000,
            'vencimiento' => Carbon::create('2021', '05', '27'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 145000,
            'vencimiento' => Carbon::create('2021', '05', '23'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 789000,
            'vencimiento' => Carbon::create('2021', '06', '09'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 753000,
            'vencimiento' => Carbon::create('2021', '06', '14'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 357000,
            'vencimiento' => Carbon::create('2021', '06', '02'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 3,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 159000,
            'vencimiento' => Carbon::create('2021', '06', '21'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 456000,
            'vencimiento' => Carbon::create('2021', '07', '21'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 128000,
            'vencimiento' => Carbon::create('2021', '07', '22'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 743000,
            'vencimiento' => Carbon::create('2021', '07', '14'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 986000,
            'vencimiento' => Carbon::create('2021', '08', '21'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 752000,
            'vencimiento' => Carbon::create('2021', '08', '11'),
            'vigencia' => 1
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 336000,
            'vencimiento' => Carbon::create('2021', '08', '22'),
            'vigencia' => 0
        ]);

        $lista = ListaPagos::create([
            'client_id' => 4,
            'num_plan' => mt_Rand(1000000000,9999999999),
            'valor' => 147000,
            'vencimiento' => Carbon::create('2021', '08', '25'),
            'vigencia' => 1
        ]);


    }
}
