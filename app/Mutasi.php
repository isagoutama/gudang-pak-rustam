<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $fillable = ['barang_id','qty','supply','tanggal','status'];
    public function barang()
    {
      return $this->belongsTo('App\Barang','barang_id','id');
    }
}
