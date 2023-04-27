<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UsersSeeder::class
            // KategoriSeeder::class
            // StatusSeeder::class
            // PemohonSeeder::class
            // UnitKerjaSeeder::class
            // Pemohon2Seeder::class
            // AdminSeeder::class
            // MessagesSeeder::class
            SuperadminSeeder::class
        ]);
    }
}
