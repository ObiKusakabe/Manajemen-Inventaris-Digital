<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('penjualan')->insert([
            [
                'produk_id' => 1,
                'jumlah' => 1,
                'total_harga' => 120000,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 150000,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_id' => 3,
                'jumlah' => 2,
                'total_harga' => 100000,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
