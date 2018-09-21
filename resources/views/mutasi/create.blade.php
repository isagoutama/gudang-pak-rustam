@extends('layouts.skeleton')

@section('content')
  <div class="col-md-9">
    <form action="{{route('mutasi.save')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        @if ($status == 'masuk')
          <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
        @elseif ($status == 'keluar')
          <label for="">Pilih Barang</label>
          <select class="form-control" name="id_barang">
            @foreach ($barangs as $key)
              <option value="{{$key->id}}">{{$key->nama_barang}}</option>
            @endforeach
          </select>
        @endif
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="{{($status == 'masuk')?'Jumlah Barang':'Jumlah Dimutasikan'}}" name="qty">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="{{($status == 'masuk')?'Mutasi dari':'Dimutasikan ke'}}" name="supply">
      </div>
      <div class="form-group">
        <label for="">Dimutasikan Tanggal :</label>
        <input type="date" class="form-control" name="tanggal">
      </div>
      <input type="hidden" name="status" value="{{$status}}">
      <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
@endsection
