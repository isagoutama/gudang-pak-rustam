<nav class="navbar navbar-expand-lg navbar-light bg-success" style="">
  <a class="navbar-brand text-white" href="#">Gudang Sekolah</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('barang.index')}}">Data Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('peminjaman.index')}}">Data Peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('mutasi.index')}}">Data Mutasi Barang</a>
      </li>
    </ul>
      {{-- <a href="#" class="btn btn-outline-light ml-auto">Logout</a> --}}
  </div>
</nav>
