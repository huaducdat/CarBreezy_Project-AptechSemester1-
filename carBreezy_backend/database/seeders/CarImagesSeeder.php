<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('car_images')->insert([
            [
                'car_id' => 1,
                'image_url' => 'https://via.placeholder.com/800x600?text=Vios+Front'
            ],
            [
                'car_id' => 1,
                'image_url' => 'https://via.placeholder.com/800x600?text=Vios+Interior'
            ],
            [
                'car_id' => 2,
                'image_url' => 'https://via.placeholder.com/800x600?text=Mazda3+Side'
            ]
        ]);
    }
}
