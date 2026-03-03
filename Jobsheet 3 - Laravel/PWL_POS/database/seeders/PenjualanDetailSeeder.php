<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        // Reference prices matching m_barang to keep data realistic
        $harga_jual = [
            1 => 60000, 2 => 85000, 3 => 25000, 4 => 35000, 5 => 55000,
            6 => 50000, 7 => 90000, 8 => 45000, 9 => 75000, 10 => 70000
        ];

        $data = [];
        $detail_id = 1;

        // Loop through the 10 transactions
        for ($i = 1; $i <= 10; $i++) {
            // Assign 3 items per transaction
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = (($i + $j) % 10) + 1; // Shifts through IDs 1-10 cyclically

                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $harga_jual[$barang_id],
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}