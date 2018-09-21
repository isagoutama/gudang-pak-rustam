<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';
    public $timestamps = false;
    public function barang()
    {
      return $this->belongsTo('App\Barang','barang_id','id');
    }
}
