<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class kategori extends Model
{

    protected $table = 'kategori';
    public $timestamps = false;
    protected $fillable = ['id','nama','deskripsi'];

}
