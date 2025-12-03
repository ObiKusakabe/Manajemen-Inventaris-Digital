<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StokKeluar extends Model {
    protected $table = 'stok_keluar';
    protected $fillable = ['produk_id', 'jumlah', 'tanggal', 'tujuan', 'keterangan'];

    public function product(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
?>