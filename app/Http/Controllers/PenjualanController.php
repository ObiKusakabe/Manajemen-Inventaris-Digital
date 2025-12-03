<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller {
    public function index(){
        $penjualan = Penjualan::with('product')->latest()->paginate(20);
        return view('penjualan.index', compact('penjualan'));
    }

    public function create(){
        $products = Produk::all();
        return view('penjualan.create', compact('products'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'produk_id'=>'required|exists:produk,id',
            'jumlah'=>'required|integer|min:1',
            'total_harga'=>'required|numeric',
            'tanggal'=>'nullable|date',
            'metode_pembayaran'=>'nullable'
        ]);

        $p = Produk::find($data['produk_id']);
        if($p->stok < $data['jumlah']){
            return back()->withErrors(['jumlah'=>'Stok tidak cukup.']);
        }

        $penjualan = Penjualan::create($data);

        $p->stok = $p->stok - $data['jumlah'];
        $p->save();

        return redirect()->route('penjualan.index')->with('success','Penjualan dicatat.');
    }
}
