<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert(
            [
                [
                'nama_status' => 'publikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'nama_status' => 'tidak dipublikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ]
            ]);
    }
}
