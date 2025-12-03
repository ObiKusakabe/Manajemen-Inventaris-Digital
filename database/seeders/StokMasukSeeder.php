<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StokMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stok_masuk')->insert([
            [
                'produk_id' => 1,
                'jumlah' => 5,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_id' => 2,
                'jumlah' => 3,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_id' => 3,
                'jumlah' => 10,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
