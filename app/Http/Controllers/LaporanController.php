<?php

namespace App\Http\Controllers;


use App\Models\Penjualan;
use App\Models\StokMasuk;
use App\Models\StokKeluar;

class LaporanController extends Controller {
    public function index(){
        $penjualan = Penjualan::with('product')->latest()->get();
        $stokMasuk = StokMasuk::with('product')->latest()->get();
        $stokKeluar = StokKeluar::with('product')->latest()->get();
        return view('laporan.index', compact('penjualan','stokMasuk','stokKeluar'));
    }
}
