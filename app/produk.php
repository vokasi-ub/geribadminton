<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class produk extends Model
{
    protected $table = 'produk';
    public $timestamps = false;
    protected $fillable = ['id','nama','deskripsi','stok','harga'];

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class,'id_produk');
    }
}
