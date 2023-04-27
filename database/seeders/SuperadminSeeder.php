<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('superadmin123'),
                'phone_number' => '087865987624',
                'avatar' => '',
                'role' => 'superadmin',
                'unit_kerja_id' => '1',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                'last_activity' => now(),
            ]);
    }
}
