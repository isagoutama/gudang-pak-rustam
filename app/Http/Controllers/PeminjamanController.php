<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Peminjaman;
use App\Barang;

class PeminjamanController extends Controller
{
    public function index()
    {
      // return date('Y-m-d H:i:s');
      $peminjamans = Peminjaman::orderBy('out','asc')->get();

      return view('peminjaman.index',['peminjamans'=>$peminjamans]);
    }

    public function create()
    {
      $barangs = Barang::where('stok','>',0)->get();
      $kelas = ['X-RPL','XI-RPL','XII-RPL',
                'X-AKL','XI-AKL','XII-AK',
                'X-OTP','XI-OTP','XII-AP',
                'X-BDP','XI-BDP','XII-PM'];
      return view('peminjaman.create',['barangs'=>$barangs,'kelas'=>$kelas]);
    }

    public function save(Request $r)
    {
      $peminjaman = Peminjaman::insert(['barang_id'=>$r->id_barang,
                                        'qty' => $r->qty,
                                        'out' => date('Y-m-d H:i:s'),
                                        'nama_peminjam' => $r->nama_peminjam,
                                        'kelas_peminjam' => $r->kelas]);
      $barang = Barang::find($r->id_barang);
      $barang->stok -= $r->qty;
      $barang->save();

      return redirect()->route('peminjaman.index');
    }

    public function dikembalikan($id)
    {
      $peminjaman = Peminjaman::find($id);
      $peminjaman->in = date('Y-m-d H:i:s');
      $barang = Barang::find($peminjaman->barang_id);
      $barang->stok += $peminjaman->qty;
      $barang->save();
      $peminjaman->save();

      return redirect()->route('peminjaman.index');
    }
}
