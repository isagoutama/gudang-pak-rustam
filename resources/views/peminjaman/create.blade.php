@extends('layouts.skeleton')

@section('content')
  <div class="col-md-9">
    <form action="{{route('peminjaman.save')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Pilih Barang :</label>
        <select class="form-control" name="id_barang">
          @foreach ($barangs as $barang)
            <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="">Jumlah Dipinjam :</label>
        <input type="number" class="form-control" name="qty">
      </div>
      <div class="form-group">
        <label for="">Nama Peminjam :</label>
        <input type="text" class="form-control" name="nama_peminjam">
      </div>
      <div class="form-group">
        <label for="">Kelas</label>
        <select class="form-control" name="kelas">
          @foreach ($kelas as $key)
            <option value="{{$key}}">{{$key}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success float-right">Submit</button>
      </div>
    </form>
  </div>
@endsection
