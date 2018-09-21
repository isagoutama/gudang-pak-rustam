@extends('layouts.skeleton')
@section('content')
    <div class="row">
      @include('barang.create')
      <div class="col-md-8">
        <h2>Data Barang</h2>
        <table class="table table-sm">
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Menu</th>
          </tr>
          @forelse ($barangs as $key => $data)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$data->nama_barang}}</td>
              <td>{{$data->stok}}</td>
              <td>
                <a href="{{route('barang.edit',['id'=>$data->id])}}" class="btn btn-warning btn-sm text-white">ubah</a>
                <a href="{{route('barang.delete',['id'=>$data->id])}}" class="btn btn-danger btn-sm text-white">hapus</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4">
                <center>Kosong</center>
              </td>
            </tr>
          @endforelse
        </table>
      </div>
    </div>
@endsection
