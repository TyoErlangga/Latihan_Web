@extends('layouts.app')

@section('content')
<div class="text-center my-5">
    <h1 class="fw-bold text-primary">Selamat Datang di <span class="text-gradient">FreshDrinks Marketplace</span></h1>
    <p class="lead text-muted">Nikmati berbagai pilihan minuman segar favoritmu — dari Pepsi hingga Nescafé. Semua tersedia di sini 🍹</p>
    <a href="{{ url('/products') }}" class="btn btn-primary btn-lg mt-3">Lihat Produk</a>
</div>

<style>
.text-gradient {
    background: linear-gradient(90deg, #004e92, #00bfff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>
@endsection
