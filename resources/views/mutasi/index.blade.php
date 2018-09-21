@extends('layouts.skeleton')

@section('content')
  <div class="col-md-12">
    <div class="row">
      <h2>Mutasi Masuk</h2>
      <a href="{{route('mutasi.create',['status'=>'masuk'])}}" class="btn btn-success btn-sm ml-auto mb-3">Tambah Data Mutasi Masuk</a>
      <table class="table table-sm">
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Jumlah</th>
          <th>Mutasi dari</th>
          <th>Tanggal Masuk</th>
          <th>Menu</th>
        </tr>
        @forelse ($mutasi_masuk as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->barang->nama_barang}}</td>
            <td>{{$value->qty}}</td>
            <td>{{$value->supply}}</td>
            <td>{{$value->tanggal}}</td>
            <td></td>
          </tr>
          @empty
          <tr>
            <td colspan="6">
              <center>kosong</center>
            </td>
          </tr>
      @endforelse
      </table>
    </div>
    <div class="mt-5"></div>
    <div class="row">
      <h2>Mutasi Keluar</h2>
      <a href="{{route('mutasi.create',['status'=>'keluar'])}}" class="btn btn-success btn-sm ml-auto mb-3">Tambah Data Mutasi Keluar</a>
      <table class="table table-sm">
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Jumlah</th>
          <th>Mutasi ke</th>
          <th>Dimutasikan Tanggal</th>
          <th>Menu</th>
        </tr>
          @forelse ($mutasi_keluar as $key => $value)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->barang->nama_barang}}</td>
            <td>{{$value->qty}}</td>
            <td>{{$value->supply}}</td>
            <td>{{$value->tanggal}}</td>
            <td></td>
          </tr>
          @empty
            <tr>
              <td colspan="6">
                <center>kosong</center>
              </td>
            </tr>
          @endforelse
        </tr>
      </table>
    </div>
  </div>
@endsection
