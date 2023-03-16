<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PemohonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'ariestuta',
                'email' => 'ariestuta11@gmail.com',
                'password' => Hash::make('madekamajaya11'),
                'phone-number' => '087865987624',
                'avatar' => '',
                'role' => 'pemohon',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
