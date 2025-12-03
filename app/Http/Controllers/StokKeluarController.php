<?php
namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\StokKeluar;
use Illuminate\Http\Request;

class StokKeluarController extends Controller {
    public function index(){
        $stokKeluar = StokKeluar::with('product')->latest()->paginate(20);
        return view('stokkeluar.index', compact('stokKeluar'));
    }

    public function create(){
        $products = Produk::all();
        return view('stokkeluar.create', compact('products'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'produk_id'=>'required|exists:produk,id',
            'jumlah'=>'required|integer|min:1',
            'tanggal'=>'nullable|date',
            'tujuan'=>'nullable',
            'keterangan'=>'nullable'
        ]);

        $p = Produk::find($data['produk_id']);
        if($p->stok < $data['jumlah']){
            return back()->withErrors(['jumlah'=>'Stok tidak cukup.']);
        }

        $stok = StokKeluar::create($data);

        $p->stok = $p->stok - $data['jumlah'];
        $p->save();

        return redirect()->route('stok-keluar.index')->with('success','Stok keluar dicatat.');
    }
}
