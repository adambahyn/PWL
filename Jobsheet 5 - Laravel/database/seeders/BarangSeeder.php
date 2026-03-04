<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Urea', 'harga_beli' => 50000, 'harga_jual' => 60000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'NPK Mutiara', 'harga_beli' => 70000, 'harga_jual' => 85000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Bibit Jagung Manis', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Bibit Padi', 'harga_beli' => 30000, 'harga_jual' => 35000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Roundup 1L', 'harga_beli' => 45000, 'harga_jual' => 55000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Gramoxone 1L', 'harga_beli' => 40000, 'harga_jual' => 50000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Cangkul Baja', 'harga_beli' => 75000, 'harga_jual' => 90000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Sabit Tajam', 'harga_beli' => 35000, 'harga_jual' => 45000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Fungisida Antracol', 'harga_beli' => 60000, 'harga_jual' => 75000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Insektisida Curacron', 'harga_beli' => 55000, 'harga_jual' => 70000],
        ];

        DB::table('m_barang')->insert($data);
    }
}