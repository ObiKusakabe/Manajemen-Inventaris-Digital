<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model {
    protected $table = 'penjualan';
    protected $fillable = ['produk_id', 'jumlah', 'total_harga', 'tanggal', 'metode_pembayaran'];

    public function product(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
?>