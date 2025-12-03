<?php
namespace App\Http\Controllers;
use App\Models\StokMasuk;
use App\Models\Produk;
use Illuminate\Http\Request;

class StokMasukController extends Controller {
    public function index(){
        $stokMasuk = StokMasuk::with('product')->latest()->paginate(20);
        return view('stokmasuk.index', compact('stokMasuk'));
    }

    public function create(){
        $products = Produk::all();
        return view('stokmasuk.create', compact('products'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'produk_id'=>'required|exists:produk,id',
            'jumlah'=>'required|integer|min:1',
            'tanggal'=>'nullable|date',
            'keterangan'=>'nullable'
        ]);
        $stok = StokMasuk::create($data);

        // update stok product
        $p = Produk::find($data['produk_id']);
        $p->stok = $p->stok + $data['jumlah'];
        $p->save();

        return redirect()->route('stok-masuk.index')->with('success','Stok masuk dicatat.');
    }
}
