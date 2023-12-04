<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'phone_number' => '087865987624',
                'avatar' => '',
                'role' => 'admin',
                'unit_kerja_id' => '1',
                'unit_kerja_2_id' => '2',
                'unit_kerja_3_id' => '3',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
