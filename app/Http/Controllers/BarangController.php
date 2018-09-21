<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function dashboard(){
      return redirect()->route('barang.index');
    }
    public function index()
    {
      $barangs = Barang::orderBy('nama_barang','asc')->get();
      // dd($barang);
      return view('barang.index',['barangs' => $barangs]);
    }

    public function save(Request $r)
    {
      // dd($r->input());
      $barang = new Barang();
      $barang->nama_barang = $r->nama_barang;
      $barang->stok = $r->stok_barang;
      $barang->save();
      return redirect('barang/index');
    }

    public function edit($id)
    {
      $barang = Barang::find($id);
      return view('barang.index',['barangs'=>Barang::orderBy('nama_barang','asc')->get(),
                                  'edit_barang'=>$barang]);
    }

    public function update(Request $r)
    {
      $barang = Barang::find($r->id);
      $barang->nama_barang = $r->nama_barang;
      $barang->stok = $r->stok_barang;
      $barang->save();

      return redirect()->route('barang.index');
    }

    public function delete($id)
    {
      $barang = Barang::find($id);
      $barang->mutasi()->delete();
      $barang->delete();
      return redirect()->route('barang.index');
    }
}
