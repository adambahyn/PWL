<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'PPK', 'kategori_nama' => 'Pupuk'],
            ['kategori_id' => 2, 'kategori_kode' => 'BBT', 'kategori_nama' => 'Bibit'],
            ['kategori_id' => 3, 'kategori_kode' => 'PST', 'kategori_nama' => 'Pestisida'],
            ['kategori_id' => 4, 'kategori_kode' => 'ALT', 'kategori_nama' => 'Alat Pertanian'],
            ['kategori_id' => 5, 'kategori_kode' => 'OBT', 'kategori_nama' => 'Obat Tanaman'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}