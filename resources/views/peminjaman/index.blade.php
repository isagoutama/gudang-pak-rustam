@extends('layouts.skeleton')

@section('content')
  <div class="col-md-12">
    <a href="{{route('peminjaman.create')}}" class="btn btn-success float-right">Tambah Peminjaman</a>
    <table class="table table-sm">
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Dipinjam</th>
        <th>Waktu Peminjaman</th>
        <th>Waktu Dikembalikan</th>
        <th>Nama Peminjam</th>
        <th>Kelas</th>
        <th>Menu</th>
      </tr>
        @forelse ($peminjamans as $key => $value)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->barang->nama_barang}}</td>
            <td>{{$value->qty}}</td>
            <td>{{date_format(date_create($value->out),'d F Y')}} <br>{{date_format(date_create($value->out),'H:i e')}} </td>
            <td>@isset($value->in){{date_format(date_create($value->in),'d F Y')}} <br>{{date_format(date_create($value->in),'H:i')}}@endisset</td>
            <td>{{$value->nama_peminjam}}</td>
            <td>{{$value->kelas_peminjam}}</td>
            <td>
            @empty($value->in)
                <a href="{{route('peminjaman.return',['id'=>$value->id])}}" class="btn btn-warning btn-sm">kembalikan</a>
              @endempty
              {{-- <a href="" class="btn btn-danger btn-sm">hapus</a> --}}
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8">
              <center>Kosong</center>
            </td>
          </tr>
        @endforelse
    </table>
  </div>
@endsection
