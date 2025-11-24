<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('services')->insert([
        [
            'name' => 'Định giá xe cơ bản',
            'price' => 200000,
            'description' => 'Định giá nhanh trong vòng 24h dựa trên thông tin và hình ảnh khách cung cấp.'
        ],
        [
            'name' => 'Định giá chi tiết tại garage',
            'price' => 600000,
            'description' => 'Kiểm tra chi tiết toàn bộ xe, test động cơ và chạy thử.'
        ],
        [
            'name' => 'Rửa xe + làm sạch nội thất',
            'price' => 150000,
            'description' => 'Combo làm sạch tiêu chuẩn, phù hợp sử dụng theo tuần.'
        ]
    ]);
    }
}
