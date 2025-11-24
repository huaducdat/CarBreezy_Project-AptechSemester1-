<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            // [
            //     'name' => 'Root Admin',
            //     'email' => 'root@carbreezy.com',
            //     'password' => bcrypt('root123'),
            //     'role' => 'root',
            // ],
            [
                'name' => 'Admin A',
                'email' => 'admin@carbreezy.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'User Test',
                'email' => 'user@test.com',
                'password' => bcrypt('user123'),
                'role' => 'user',
            ]
        ]);
    }
}
