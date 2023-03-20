<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unit_kerja')->insert(
            [
                'name' => 'Divisi Hukum',
                'email' => 'htl@ub.ac.id',
                'password' => Hash::make('htlub'),
                'phone-number' => '087865987624',
                'created_at' => now(),
                'updated_at' => now(),
            ],        
        );
    }
}
