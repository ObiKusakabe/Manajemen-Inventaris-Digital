<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index(){
        $products = Produk::with('kategori')->latest()->paginate(12);
        return view('products.index', compact('products'));
    }

    public function create(){
        $kategori = kategori::all();
        return view('products.create', compact('kategori'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama_produk'=>'required',
            'kategori_id'=>'nullable|exists:kategori,id',
            'ukuran'=>'nullable',
            'warna'=>'nullable',
            'harga'=>'required|numeric',
            'stok'=>'required|integer',
            'ukuran'=>'nullable|string',
        ]); 
        $product::create($data);
        return redirect()->route('products.index')->with('success', 'Produk dibuat.');
    }

    public function edit(Produk $product){
        $kategori = Kategori::all();
        return view('products.edit',  ['product'=>$product, 'kategori'=>$kategori]);
    }

    public function update(Request $request, Produk $product){
        $data = $request->validate([
            'nama_produk'=>'required',
            'kategori_id'=>'nullable|exists:kategori,id',
            'ukuran'=>'nullable',
            'warna'=>'nullable',
            'harga'=>'required|numeric',
            'stok'=>'required|integer',
            'foto'=>'nullable|string',
        ]);
        $product->update($data);
        return redirect()->route('products.index')->with('success','Produk diupdate.');
    }

    public function destroy(Produk $product){
        $product->delete();
        return back()->with('success','Produk dihapus.');
    }
}
?>