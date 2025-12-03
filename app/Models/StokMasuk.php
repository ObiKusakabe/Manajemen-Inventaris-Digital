<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StokMasuk extends Model {
    protected $table = 'stok_masuk';
    protected $fillable = ['produk_id', 'jumlah', 'tanggal', 'keterangan'];

    public function product(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
?>