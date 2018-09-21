<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use App\Barang;

class MutasiController extends Controller
{
    public function index()
    {
      $data = [];
      $data['mutasi_masuk'] = Mutasi::where('status','masuk')->orderBy('id','asc')->get();
      $data['mutasi_keluar'] = Mutasi::where('status','keluar')->orderBy('id','asc')->get();
      // dd($data);
      return view('mutasi.index',$data);
    }
    public function create($status)
    {
      if ($status == 'keluar') {
        $barangs = Barang::orderBy('nama_barang','asc')->get();
        return view('mutasi.create',['barangs'=>$barangs , 'status'=>$status]);
      }elseif ($status == 'masuk') {
        return view('mutasi.create',['status'=>$status]);
      }
    }
    public function save(Request $r)
    {
      if ($r->status == 'masuk') {
        $barang = Barang::create([
                        'nama_barang'=> $r->nama_barang,
                        'stok' => $r->qty]);
        $barang->mutasi()->insert(['barang_id' => $barang->id,
                              'qty' => $r->qty,
                              'supply' => $r->supply,
                              'tanggal'=>$r->tanggal,
                              'status'=>$r->status]);
                              
      }elseif($r->status == 'keluar') {
        $barang = Barang::find($r->id_barang);
        $barang->stok -= $r->qty;
        $barang->mutasi()->insert(['barang_id' => $barang->id,
                              'qty' => $r->qty,
                              'supply' => $r->supply,
                              'tanggal'=>$r->tanggal,
                              'status'=>$r->status]);
        $barang->save();
      }
      return redirect()->route('mutasi.index');
    }
}
