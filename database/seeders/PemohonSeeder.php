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
        DB::table('pemohon')->insert(
            [
                'name' => 'Imas Hidayati',
                'email' => 'imas@gmail.com',
                'password' => Hash::make('imas123'),
                'phone-number' => '087865987624',
                'avatar' => '',
                'nomor' => '2020330220001',
                'jabatan' => 'KTU',
                'unit_kerjaid'=> 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
