<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class transaksi extends Model
{
    protected $table = 'transaksi';
    public $timestamps = false;
    protected $fillable = ['id','id_produk','status','keterangan'];

    public function produk(){
        return $this->belongsTo(produk::class,'id_produk');
    }
}


