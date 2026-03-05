<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP-001',
                'supplier_nama' => 'PT Makmur Sejahtera',
                'supplier_alamat' => 'Jl. Sudirman No. 10, Jakarta Raya',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP-002',
                'supplier_nama' => 'CV Abadi Jaya',
                'supplier_alamat' => 'Jl. Pahlawan No. 45, Surabaya',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP-003',
                'supplier_nama' => 'Toko Elektronik Bintang',
                'supplier_alamat' => 'Jl. Ahmad Yani No. 88, Bandung',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}