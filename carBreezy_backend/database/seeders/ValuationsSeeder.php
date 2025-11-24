<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValuationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('valuations')->insert([
        [
            'user_id' => 3,
            'car_model' => 'Toyota Vios E',
            'year' => 2019,
            'mileage' => 55000,
            'image_url' => null,
            'estimated_price' => 420000000
        ],
        [
            'user_id' => 3,
            'car_model' => 'Mazda 3 Sport',
            'year' => 2020,
            'mileage' => 32000,
            'image_url' => null,
            'estimated_price' => 620000000
        ]
    ]);
    }
}
