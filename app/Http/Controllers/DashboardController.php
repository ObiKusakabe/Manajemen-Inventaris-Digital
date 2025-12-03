<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;
use App\Models\StokMasuk;
use App\Models\StokKeluar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index(){
        $totalProduk = Produk::count();
        $totalMasuk = StokMasuk::sum('jumlah');
        $totalKeluar = StokKeluar::sum('jumlah');

        $totalStok = Produk::sum('stok');

        // top 5 produk terlaris
        $topSelling = Penjualan::select('produk_id', DB::raw('SUM(jumlah) as total'))
                        ->groupBy('produk_id')
                        ->orderByDesc('total')
                        ->take(5)
                        ->get()
                        ->map(function($r){
                            $prod = Produk::find($r->produk_id);
                            return ['produk'=>$prod,'total'=>$r->total];
                        });

        // low-selling: produk dengan penjualan 0 atau paling sedikit (simple approach)
        $salesPerProduct = Penjualan::select('produk_id', DB::raw('SUM(jumlah) as total'))
                            ->groupBy('produk_id')
                            ->pluck('total','produk_id')->toArray();

        $lowSelling = Produk::whereNotIn('id', array_keys($salesPerProduct))
                        ->take(5)->get();

        // Perhitungan ROP sederhana: ROP = lead_time*demand_rate + safety_stock
        // Untuk sementara tampilkan ROP placeholder per produk (kamu bisa kembangkan)
        $products = Produk::all()->map(function($p){
            $demand_rate = 2; // dummy per hari, nanti diganti perhitungan riil
            $lead_time = 7; // hari
            $safety = 5;
            $rop = $lead_time * $demand_rate + $safety;
            return ['produk'=>$p,'rop'=>$rop];
        });

        return view('dashboard.index', compact('totalProduk','totalMasuk','totalKeluar','totalStok','topSelling','lowSelling','products'));
    }
}
