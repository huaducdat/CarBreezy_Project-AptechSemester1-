<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->insert([
            [
                'user_id' => 3, // User test
                'title' => 'Toyota Vios E 2019',
                'year' => 2019,
                'mileage' => 55000,
                'price' => 420000000,
                'description' => 'Xe gia đình, không tai nạn, bảo dưỡng đầy đủ.',
                'status' => 'approved'
            ],
            [
                'user_id' => 3,
                'title' => 'Mazda 3 Sport 2020',
                'year' => 2020,
                'mileage' => 32000,
                'price' => 620000000,
                'description' => 'Xe đẹp, màu đỏ, form mới.',
                'status' => 'pending'
            ]
        ]);
    }
}
