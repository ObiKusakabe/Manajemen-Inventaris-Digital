<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produk')->insert([
            [
                'nama_produk' => 'Blouse Wanita',
                'kategori_id' => 1,
                'harga' => 120000,
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Celana Jeans',
                'kategori_id' => 2,
                'harga' => 150000,
                'stok' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kalung Elegant',
                'kategori_id' => 3,
                'harga' => 50000,
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
