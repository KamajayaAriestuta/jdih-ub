<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('kategori')->insert(
            [
                ['nama_kategori' => 'UUD 1945'],
                ['nama_kategori' => 'Ketetapan MPR RI'],
                ['nama_kategori' => 'UU/Perpu'],
                ['nama_kategori' => 'Peraturan Pemerintah'],
                ['nama_kategori' => 'Peraturan Presiden'],
                ['nama_kategori' => 'Keputusan Presiden'],
                ['nama_kategori' => 'Intruksi Presiden'],
                ['nama_kategori' => 'Peraturan Menteri'],
                ['nama_kategori' => 'Keputusan Menteri'],
                ['nama_kategori' => 'Surat Edaran Menteri'],
                ['nama_kategori' => 'Peraturan Daerah Provinsi'],
                ['nama_kategori' => 'Peraturan Daerah Kabupaten/Kota'],
                ['nama_kategori' => 'Peraturan Rektor'],
                ['nama_kategori' => 'Surat Keputusan Rektor'],
                ['nama_kategori' => 'Surat Perintah Rektor'],
                ['nama_kategori' => 'Surat Edaran Rektor'],
                ['nama_kategori' => 'Surat Keputusan Dekan'],
                ['nama_kategori' => 'Peraturan Majelis Wali Amanat'],
                ['nama_kategori' => 'Surat Keputusan Majelis Wali Amanat'],
                ['nama_kategori' => 'Peraturan Senat Akademik Universitas'],
                ['nama_kategori' => 'Surat Keputusan Senat Akademik Universitas'],
                ['nama_kategori' => 'Surat Tugas Rektor'],
                ['nama_kategori' => 'Surat Tugas Dekan'],
                ['nama_kategori' => 'Surat Tugas Lembaga'],
                ['nama_kategori' => 'Surat Tugas Kepala Biro'],
                ['nama_kategori' => 'Surat Tugas Kepala UPT'],
            ]);
    }
}


