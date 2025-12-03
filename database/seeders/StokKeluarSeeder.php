<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StokKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stok_keluar')->insert([
            [
                'produk_id' => 1,
                'jumlah' => 2,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_id' => 2,
                'jumlah' => 1,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_id' => 3,
                'jumlah' => 4,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
