<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('kategori_surats')->insert([
            [
                'nama_kategori' => 'Pemberitahuan',
                'keterangan' => 'Surat untuk memberitahukan sesuatu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Pengumuman',
                'keterangan' => 'Surat untuk mengumumkan sesuatu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Undangan',
                'keterangan' => 'Surat untuk mengundang ke suatu acara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Nota Dinas',
                'keterangan' => 'Surat untuk urusan dinas atau pekerjaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
