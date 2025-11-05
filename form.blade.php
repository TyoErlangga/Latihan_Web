@extends('layouts.app')
@section('title', $product->id ? 'Edit Produk' : 'Tambah Produk')

@section('content')
<h3>{{ $product->id ? 'Edit Produk' : 'Tambah Produk' }}</h3>

<form method="POST" action="{{ $product->id ? route('admin.update',$product->id) : route('admin.store') }}">
  @csrf
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input name="name" value="{{ old('name',$product->name) }}" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Kategori</label>
    <input name="category" value="{{ old('category',$product->category) }}" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Harga (IDR)</label>
    <input name="price" value="{{ old('price',$product->price) }}" class="form-control" type="number" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Stok</label>
    <input name="stock" value="{{ old('stock',$product->stock) }}" class="form-control" type="number" required>
  </div>
  <div class="mb-3">
    <label class="form-label">URL Gambar</label>
    <input name="image" value="{{ old('image',$product->image) }}" class="form-control" placeholder="https://...">
  </div>
  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="description" class="form-control">{{ old('description',$product->description) }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Bahan (pisahkan koma)</label>
    <input name="ingredients" value="{{ old('ingredients', is_array($product->ingredients ? json_decode($product->ingredients,true) : []) ? implode(', ' , json_decode($product->ingredients,true)) : $product->ingredients) }}" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Kalori</label>
    <input name="calories" value="{{ old('calories',$product->calories) }}" class="form-control" type="number">
  </div>

  <button class="btn btn-primary">Simpan</button>
  <a href="{{ route('admin.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
