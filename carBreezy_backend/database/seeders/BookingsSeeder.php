<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           DB::table('bookings')->insert([
        [
            'user_id' => 3, 
            'service_id' => 1, // Định giá cơ bản
            'date' => '2025-01-10',
            'time' => '09:00',
            'car_info' => 'Toyota Vios 2019',
            'image_url' => null,
            'status' => 'pending'
        ],
        [
            'user_id' => 3,
            'service_id' => 3, // Rửa xe
            'date' => '2025-01-12',
            'time' => '14:00',
            'car_info' => 'Mazda 3 2020',
            'image_url' => null,
            'status' => 'approved'
        ]
    ]);
    }
}
