<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model {
    protected $table = 'produk';
    protected $fillable = ['kategori_id', 'nama_produk', 'ukuran', 'warna', 'harga', 'stok', 'foto'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function stokMasuk(){
        return $this->hasMany(StokMasuk::class, 'produk_id');
    }
    public function stokKeluar(){
        return $this->hasMany(StokKeluar::class, 'produk_id');
    }
    public function penjualan(){
        return $this->hasMany(Penjualan::class, 'produk_id');
    }
}
?>