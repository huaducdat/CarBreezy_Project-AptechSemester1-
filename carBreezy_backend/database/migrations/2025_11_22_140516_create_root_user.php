<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        // Tạo tài khoản ROOT nếu chưa có
        if (!DB::table('users')->where('email', 'root@carbreezy.com')->exists()) {

            DB::table('users')->insert([
                'name'       => 'Root',
                'email'      => 'diepy94@gmail.com',
                'password'   => Hash::make('yourpasswordisroot'),   // bạn đổi password nếu muốn
                'phone'      => '+84-854065289',
                'role'       => 'root',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        // Xoá tài khoản ROOT khi rollback
        DB::table('users')->where('email', 'diepy94@gmail.com')->delete();
    }
};
