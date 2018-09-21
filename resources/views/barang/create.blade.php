<div class="col-md-4">
  <div class="mt-3"></div>
  <div class="bg-light rounded border border-success p-3">
  @if (isset($edit_barang))
    <h2>Edit Barang</h2>
    <form class="" action="{{route('barang.update')}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$edit_barang->id}}">
      <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" value="{{$edit_barang->nama_barang}}">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="number" name="stok_barang" placeholder="Stok Barang" class="form-control" value="{{$edit_barang->stok}}">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">Submit</button>
      </div>
    </form>
  @else
    <h2>Tambah Barang</h2>
    <form class="" action="{{route('barang.save')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="number" name="stok_barang" placeholder="Stok Barang" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">Submit</button>
      </div>
    </form>
  @endif
  </div>
</div>
