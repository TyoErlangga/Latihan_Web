@extends('layouts.app')
@section('title','Dashboard Admin - DrinkStore')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Dashboard Admin</h3>
  <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Produk</a>
</div>

<table class="table table-striped">
  <thead><tr><th>Gambar</th><th>Nama</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr></thead>
  <tbody>
    @foreach($products as $p)
    <tr>
      <td><img src="{{ $p->image }}" style="width:70px;height:50px;object-fit:contain"></td>
      <td>{{ $p->name }}</td>
      <td>{{ $p->category }}</td>
      <td>{{ number_format($p->price,0,',','.') }}</td>
      <td>{{ $p->stock }}</td>
      <td>
        <a href="{{ route('admin.edit', $p->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
        <a href="{{ route('admin.delete', $p->id) }}" class="btn btn-sm btn-outline-danger"
           onclick="return confirm('Hapus produk?')">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
