<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang','stok'];

    public function peminjaman()
    {
      return $this->hasMany('App\Peminjaman','barang_id','id');
    }

    public function mutasi()
    {
      return $this->hasOne('App\Mutasi','barang_id','id');
    }
}
