<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Add role
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['user', 'admin', 'root'])
                      ->default('user')
                      ->after('phone');
            }
        });

        // CARS
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');
        });

        // BOOKINGS
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('bookings', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');
        });

        // VALUATIONS
        Schema::table('valuations', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('valuations', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }
        });

        // Revert to string (safe)
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->string('status')->default('pending');
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('status')->default('pending');
        });

        Schema::table('valuations', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('valuations', function (Blueprint $table) {
            $table->string('status')->default('pending');
        });
    }
};
